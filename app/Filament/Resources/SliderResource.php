<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Filament\Resources\SliderResource\RelationManagers;
use App\Models\Slider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;
    protected static ?string $navigationLabel = 'اسلایدر';
        protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('id')->label('ردیف'),
                Forms\Components\TextInput::make('title')->label('عنوان'),
                Forms\Components\RichEditor::make('content')->label('متن'),
                Forms\Components\FileUpload::make('img')->label('عکس')->required()->nullable(false)
                ->disk('public')->directory('images/ourwork')->image()->imageEditor()
                ->imageEditorAspectRatios([
                    '16:9',
                    '4:3',
                    '1:1',
                ])->imageEditorViewportWidth('500')
                ->imageEditorViewportHeight('300'),
               
                Forms\Components\Radio::make('news_type')->label('وضعیت')->options([
                    '1' => 'فعال',
                    '0' => 'غیرفعال'
                    
                ]),
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('id')->label('ردیف'),
                Tables\Columns\TextColumn::make('title')->label('عنوان'),
                Tables\Columns\TextColumn::make('content')->label('متن'),
                Tables\Columns\TextColumn::make('img')->label('عکس'),
                Tables\Columns\TextColumn::make('lead')->label('لید'),
                Tables\Columns\TextColumn::make('news_type')->label('وضعیت'),
                
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
    protected function getTableQuery(): Builder
    {
        return slider::query()->orderBy('id','desc');
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
