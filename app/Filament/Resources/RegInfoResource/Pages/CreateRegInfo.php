<?php

namespace App\Filament\Resources\RegInfoResource\Pages;

use App\Filament\Resources\RegInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRegInfo extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    
    protected static string $resource = RegInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
