<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('velora.products', []);

        foreach ($products as $index => $item) {
            Product::updateOrCreate(
                ['slug' => Str::slug($item['name'])],
                [
                    'name' => $item['name'],
                    'size' => $item['size'],
                    'badge' => $item['badge'] ?? null,
                    'category' => match ($item['id'] ?? '') {
                        'tablets-capsules' => 'Tablets & Capsules',
                        'liquid-orals' => 'Liquid Orals & Syrups',
                        'injectables' => 'Sterile Injectables',
                        'derma-topical' => 'Dermatological Topicals',
                        'nutraceuticals' => 'Nutraceuticals & Wellness',
                        'pcd-franchise' => 'PCD Pharma Franchise',
                        default => 'Pharmaceutical Formulations'
                    },
                    'tagline' => $item['tagline'] ?? null,
                    'description' => $item['description'] ?? null,
                    'specs' => $item['specs'] ?? [],
                    'whatsapp_text' => $item['whatsapp_text'] ?? null,
                    'is_featured' => ! empty($item['popular']),
                    'is_active' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }
    }
}
