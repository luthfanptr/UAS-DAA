<?php

namespace App\Filament\Admin\Resources\AirQualityResource\Pages;

use App\Filament\Admin\Resources\AirQualityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAirQuality extends EditRecord
{
    protected static string $resource = AirQualityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
