<?php

namespace App\Filament\Admin\Resources\KaryaseniResource\Pages;

use App\Filament\Admin\Resources\KaryaseniResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKaryaseni extends EditRecord
{
    protected static string $resource = KaryaseniResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
