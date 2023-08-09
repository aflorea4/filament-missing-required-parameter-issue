<?php

namespace App\Filament\Resources\EmploymentAnnouncementResource\Pages;

use App\Filament\Resources\EmploymentAnnouncementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmploymentAnnouncement extends CreateRecord
{
    protected static string $resource = EmploymentAnnouncementResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        return $data;
    }
}
