<?php

namespace App\Filament\Admin\Resources\KursustutorialResource\Pages;

use App\Filament\Admin\Resources\KursustutorialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKursustutorials extends ListRecords
{
    protected static string $resource = KursustutorialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
