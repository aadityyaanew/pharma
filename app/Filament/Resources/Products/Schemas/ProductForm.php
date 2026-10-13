<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->schema([
                        TextInput::make('name')
                            ->label('Product Name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g. Amoxicillin & Potassium Clavulanate Tablets')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, callable $set) {
                                if ($operation === 'create') {
                                    $set('slug', Str::slug($state));
                                }
                            }),

                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),

                        TextInput::make('size')
                            ->label('Dosage / Packaging Size')
                            ->required()
                            ->maxLength(100)
                            ->placeholder('e.g. 10x10 Alu-Alu Strip, 100 ml Syrup, 1 Vial'),

                        Select::make('category')
                            ->options([
                                'Tablets & Capsules' => 'Tablets & Capsules',
                                'Liquid Orals & Syrups' => 'Liquid Orals & Syrups',
                                'Sterile Injectables' => 'Sterile Injectables',
                                'Dermatological Topicals' => 'Dermatological Topicals',
                                'Nutraceuticals & Wellness' => 'Nutraceuticals & Wellness',
                                'PCD Pharma Franchise' => 'PCD Pharma Franchise',
                                'Pharmaceutical Formulations' => 'Pharmaceutical Formulations',
                            ])
                            ->default('Tablets & Capsules')
                            ->required(),

                        TextInput::make('badge')
                            ->label('Badge / Label')
                            ->maxLength(100)
                            ->placeholder('e.g. High Efficacy Formulation, DCGI Approved'),

                        TextInput::make('tagline')
                            ->label('Tagline')
                            ->maxLength(255)
                            ->placeholder('e.g. WHO-GMP Certified High Efficacy Oral Solid Dosage'),

                        TextInput::make('price')
                            ->label('Indicative Price (₹)')
                            ->numeric()
                            ->prefix('₹')
                            ->nullable()
                            ->helperText('Optional retail or reference rate.'),

                        TextInput::make('sort_order')
                            ->label('Display Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers display first.'),
                    ])
                    ->columns(2),

                Section::make('Visuals & Media')
                    ->schema([
                        FileUpload::make('featured_image')
                            ->label('Product Packaging / Box Image')
                            ->image()
                            ->maxSize(5120)
                            ->disk('public')
                            ->directory('products')
                            ->visibility('public')
                            ->columnSpanFull()
                            ->helperText('Upload a clean transparent PNG or high-res JPG/WEBP of the box, blister pack, or bottle (Max 5MB).'),

                        Textarea::make('description')
                            ->label('Product Description')
                            ->rows(4)
                            ->columnSpanFull()
                            ->placeholder('Describe therapeutic indications, active ingredients, dosage guidance, packaging, and cleanroom manufacturing specifications.'),
                    ]),

                Section::make('Technical Specifications & Inquiries')
                    ->schema([
                        KeyValue::make('specs')
                            ->label('Product Specifications')
                            ->keyLabel('Specification')
                            ->valueLabel('Detail')
                            ->helperText('e.g. Packaging Formats: 10x10 Alu-Alu, Quality Standard: WHO-GMP, Therapeutic Segment: Antibiotics')
                            ->columnSpanFull(),

                        TextInput::make('whatsapp_text')
                            ->label('WhatsApp Enquiry Template')
                            ->maxLength(255)
                            ->placeholder('Hi Jay Ambe Life Care, I would like to enquire about bulk supply and franchise for this product.')
                            ->columnSpanFull()
                            ->helperText('Pre-filled message when customers click "Enquire via WhatsApp".'),
                    ]),

                Section::make('Status & Visibility')
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Active on Website')
                            ->default(true)
                            ->helperText('Visible on public products catalog.'),

                        Toggle::make('is_featured')
                            ->label('Mark as Signature / Featured SKU')
                            ->default(false)
                            ->helperText('Highlights this product with signature badge styling.'),
                    ])
                    ->columns(2),
            ]);
    }
}
