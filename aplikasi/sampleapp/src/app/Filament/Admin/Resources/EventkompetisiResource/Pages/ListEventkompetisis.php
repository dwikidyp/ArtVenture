<?php

namespace App\Filament\Admin\Resources\EventkompetisiResource\Pages;

use App\Filament\Admin\Resources\EventkompetisiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventkompetisis extends ListRecords
{
    protected static string $resource = EventkompetisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
