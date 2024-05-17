<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TagsColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
class ProductResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'محصولات';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('id')->label('ردیف'),
                Forms\Components\TextInput::make('name')->label('عنوان')->required(),
                Forms\Components\TextInput::make('slug')->label('عنوان لینک')->required(),
                 Forms\Components\TagsInput::make('tags')->label('دسته بندی ها')->separator(',')->required(),
                Forms\Components\RichEditor::make('content')->label('متن')->required(),
                Forms\Components\TextInput::make('price')->label('قیمت')->required(),
                Forms\Components\FileUpload::make('img')->label('عکس')->required()->nullable(false)
                ->disk('media')->directory('images/products')->image()->imageEditor()
                ->imageEditorAspectRatios([
                    '16:9',
                    '4:3',
                    '1:1',
                ])->imageEditorViewportWidth('500')
                ->imageEditorViewportHeight('300')->required(),               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('id')->label('ردیف'),
                Tables\Columns\TextColumn::make('name')->label('عنوان'),
                Tables\Columns\TextColumn::make('slug')->label('عنوان لینک'),
                Tables\Columns\TextColumn::make('tags')->label('دسته بندی ها'),
                Tables\Columns\TextColumn::make('content')->label('متن'),
                Tables\Columns\TextColumn::make('price')->label('قیمت'),
                Tables\Columns\TextColumn::make('img')->label('عکس'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
