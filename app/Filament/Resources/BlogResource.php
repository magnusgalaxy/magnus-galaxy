<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-alt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Blog Details')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\MultiSelect::make('categories')
                                    ->relationship('categories', 'name'),
                                Forms\Components\MultiSelect::make('tags')
                                    ->relationship('tags', 'name'),
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->label('Blog Name'),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }    
}
