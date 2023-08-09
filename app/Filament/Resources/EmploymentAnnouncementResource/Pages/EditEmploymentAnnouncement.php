<?php

namespace App\Filament\Resources\EmploymentAnnouncementResource\Pages;

use App\Filament\Resources\EmploymentAnnouncementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmploymentAnnouncement extends EditRecord
{
    protected static string $resource = EmploymentAnnouncementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
