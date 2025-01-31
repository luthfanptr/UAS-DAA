<?php

namespace App\Filament\Admin\Resources\SummaryReportResource\Pages;

use App\Filament\Admin\Resources\SummaryReportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSummaryReport extends EditRecord
{
    protected static string $resource = SummaryReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
