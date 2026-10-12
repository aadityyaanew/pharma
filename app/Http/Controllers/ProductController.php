<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of active products.
     */
    public function index(Request $request): View
    {
        $category = $request->query('category');
        $search = $request->query('search');

        try {
            $query = Product::active();

            if ($category && $category !== 'All') {
                $query->where('category', $category);
            }

            if ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('size', 'like', "%{$search}%")
                        ->orWhere('tagline', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%");
                });
            }

            $products = $query->orderBy('sort_order', 'asc')->orderBy('id', 'asc')->paginate(12)->withQueryString();

            $categories = Product::active()
                ->whereNotNull('category')
                ->distinct()
                ->pluck('category');

            $featuredProducts = Product::active()
                ->featured()
                ->orderBy('sort_order', 'asc')
                ->take(3)
                ->get();
        } catch (\Throwable $e) {
            $products = new \Illuminate\Pagination\LengthAwarePaginator([], 0, 12);
            $categories = collect();
            $featuredProducts = collect();
        }

        return view('products.index', compact('products', 'categories', 'category', 'search', 'featuredProducts'));
    }

    /**
     * Display details for a specific product.
     */
    public function show(string $slug): View
    {
        try {
            $product = Product::active()
                ->where('slug', $slug)
                ->first();
        } catch (\Throwable $e) {
            $product = null;
        }

        if (!$product) {
            $configProducts = config('velora.products', []);
            $found = collect($configProducts)->firstWhere('id', $slug);
            if ($found) {
                $product = (object) [
                    'id' => 0,
                    'name' => $found['name'],
                    'slug' => $found['id'],
                    'size' => $found['size'],
                    'category' => $found['size'],
                    'badge' => $found['badge'] ?? null,
                    'tagline' => $found['tagline'] ?? null,
                    'description' => $found['description'] ?? null,
                    'specs' => $found['specs'] ?? [],
                    'whatsapp_text' => $found['whatsapp_text'] ?? null,
                    'featured_image' => null,
                ];
            } else {
                abort(404);
            }
        }

        try {
            $relatedProducts = Product::active()
                ->where('id', '!=', $product->id ?? 0)
                ->take(3)
                ->get();
        } catch (\Throwable $e) {
            $relatedProducts = collect();
        }

        return view('products.show', compact('product', 'relatedProducts'));
    }
}
