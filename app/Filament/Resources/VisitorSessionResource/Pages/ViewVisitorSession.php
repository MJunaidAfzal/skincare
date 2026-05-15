<?php

namespace App\Filament\Resources\VisitorSessionResource\Pages;

use App\Filament\Resources\VisitorSessionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewVisitorSession extends ViewRecord
{
    protected static string $resource = VisitorSessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
