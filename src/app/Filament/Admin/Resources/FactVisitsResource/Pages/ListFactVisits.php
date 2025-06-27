<?php

namespace App\Filament\Admin\Resources\FactVisitsResource\Pages;

use App\Filament\Admin\Resources\FactVisitsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFactVisits extends ListRecords
{
    protected static string $resource = FactVisitsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
