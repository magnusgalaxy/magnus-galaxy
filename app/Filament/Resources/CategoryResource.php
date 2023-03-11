<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-view-grid';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Category Details')
                    ->schema([
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\Select::make('parent_id')
                                    ->options(fn(?Category $record) =>  $record === null ? Category::pluck('name', 'id') : Category::where('id', '!=', $record->id)->pluck('name', 'id'))
                                    ->default(0)
                                    ->label('Parent Category'),
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->label('Category Name'),
                                Forms\Components\FileUpload::make('image')
                                    ->image(),
                            ]),
                        Forms\Components\Grid::make(1)
                            ->schema([
                                Forms\Components\RichEditor::make('description'),
                            ])
                    ]),
                Forms\Components\Fieldset::make('SEO Details')
                    ->schema([
                        Forms\Components\Textarea::make('meta_title'),
                        Forms\Components\Textarea::make('meta_description'),
                        Forms\Components\Textarea::make('meta_keywords'),
                    ])
                    ->columns(3),

                Forms\Components\Toggle::make('is_active'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\BooleanColumn::make('is_active')
                    ->label('Active'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }    
}
