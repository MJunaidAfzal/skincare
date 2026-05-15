<?php

namespace App\Filament\Resources\VisitorSessionResource\Pages;

use App\Filament\Resources\VisitorSessionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisitorSessions extends ListRecords
{
    protected static string $resource = VisitorSessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // No create action because VisitorSessions are system-generated
        ];
    }
}
