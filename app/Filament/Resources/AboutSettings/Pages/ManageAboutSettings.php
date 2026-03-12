<?php

namespace App\Filament\Resources\AboutSettings\Pages;

use App\Filament\Resources\AboutSettings\AboutSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageAboutSettings extends ManageRecords
{
    protected static string $resource = AboutSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
