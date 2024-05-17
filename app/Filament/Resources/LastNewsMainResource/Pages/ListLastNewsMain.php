<?php

namespace App\Filament\Resources\LastNewsMainResource\Pages;

use App\Filament\Resources\LastNewsMainResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLastNewsMains extends ListRecords
{
    protected static string $resource = LastNewsMainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
