<?php

namespace App\Filament\Resources;
header("Access-Control-Allow-Origin: *");
use App\Filament\Resources\PaperResource\Pages;
use App\Filament\Resources\LastNewsMainResource\RelationManagers;
use App\Models\papers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Panel;
use Filament\View\PanelsRenderHook;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use RalphJSmit\Filament\SEO\SEO;
use Filament\Forms\Components\TagsInput;
class PaperResource extends Resource
{
    public function panel(Panel $panel): Panel
{
    return $panel
        // ...
        ->brandName('طنین پرتو آوا');
}
    protected static ?string $model = papers::class;
    protected static ?string $navigationLabel = 'مقاله ها';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('id')->label('ردیف'),
                Forms\Components\TextInput::make('title')->label('عنوان')->required(),
                Forms\Components\RichEditor::make('content')->label('متن')->required(),
                Forms\Components\FileUpload::make('img')->label('عکس')->required()->nullable(false)
                ->disk('media')->directory('images/papers')->image()->imageEditor()
                ->imageEditorAspectRatios([
                    '16:9',
                    '4:3',
                    '1:1',
                ])->imageEditorViewportWidth('500')
                ->imageEditorViewportHeight('300'),
                Forms\Components\TextInput::make('lead')->label('لید')->required(),
                Forms\Components\Radio::make('news_type')->label('وضعیت')->options([
                    '1' => 'فعال',
                    '0' => 'غیرفعال'
                    
                ])->required(),
                Forms\Components\DateTimePicker::make('date')->label('تاریخ')->required(),
                Forms\Components\TagsInput::make('more')->label('تگ ها')->separator(',')->required(),
                Forms\Components\TextInput::make('slug')->label('توضیح کوتاه')->required(),
           
             
            ]);
    }
    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('id')->label('ردیف'),
            Tables\Columns\TextColumn::make('title')->label('عنوان'),
            Tables\Columns\TextColumn::make('content')->label('متن'),
            Tables\Columns\TextColumn::make('img')->label('عکس'),
            Tables\Columns\TextColumn::make('lead')->label('لید'),
            Tables\Columns\TextColumn::make('news_type')->label('وضعیت'),
            Tables\Columns\TextColumn::make('date')->label('تاریخ'),
            Tables\Columns\TextColumn::make('more')->label('تگ ها'),
            Tables\Columns\TextColumn::make('slug')->label('توضیح کوتاه'),
            // ...
        ])
        ->filters([
            
            // ...
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
    protected function getTableQuery(): Builder
    {
        return papers::query()->orderBy('id','desc');
    }
 
    protected function getTableColumns(): array
    {
        return [
          
            
                Tables\Columns\TextColumn::make('id')->label('ردیف'),
                Tables\Columns\TextColumn::make('title')->label('عنوان'),
                Tables\Columns\TextColumn::make('content')->label('متن'),
                Tables\Columns\TextColumn::make('img')->label('عکس')->required(),
                Tables\Columns\TextColumn::make('lead')->label('لید'),
                Tables\Columns\TextColumn::make('news_type')->label('وضعیت'),
                Tables\Columns\TextColumn::make('date')->label('تاریخ'),
                Tables\Columns\TextColumn::make('more')->label('تگ ها'),
                Tables\Columns\TextColumn::make('slug')->label('توضیح کوتاه'),
        ];
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
            'index' => Pages\ListPapers::route('/'),
            'create' => Pages\CreatePaper::route('/create'),
            'edit' => Pages\EditPaper::route('/{record}/edit'),
        ];
    }
}
