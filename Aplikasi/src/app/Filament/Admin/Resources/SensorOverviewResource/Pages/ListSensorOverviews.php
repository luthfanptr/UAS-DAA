<?php

namespace App\Filament\Admin\Resources\SensorOverviewResource\Pages;

use App\Filament\Admin\Resources\SensorOverviewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSensorOverviews extends ListRecords
{
    protected static string $resource = SensorOverviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
