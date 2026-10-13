<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('featured_image')
                    ->label('Thumbnail')
                    ->disk('public')
                    ->square(),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(40)
                    ->weight('bold'),

                TextColumn::make('category')
                    ->badge()
                    ->color('info')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('author_name')
                    ->label('Author')
                    ->searchable()
                    ->toggleable(),

                IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('published_at')
                    ->label('Date')
                    ->dateTime('M d, Y')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'Quality & Compliance' => 'Quality & Compliance',
                        'Pharma Business & Franchise' => 'Pharma Business & Franchise',
                        'Hospital & Therapeutics' => 'Hospital & Therapeutics',
                        'Formulation Science' => 'Formulation Science',
                        'Company News' => 'Company News',
                    ]),
                TernaryFilter::make('is_published')
                    ->label('Published status'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
