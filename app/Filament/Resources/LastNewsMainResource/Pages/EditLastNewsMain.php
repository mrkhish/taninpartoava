<?php

namespace App\Filament\Resources\LastNewsMainResource\Pages;

use App\Filament\Resources\LastNewsMainResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLastNewsMain extends EditRecord
{
    protected static string $resource = LastNewsMainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
