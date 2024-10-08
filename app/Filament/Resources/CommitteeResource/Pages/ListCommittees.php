<?php

namespace App\Filament\Resources\CommitteeResource\Pages;

use App\Filament\Resources\CommitteeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommittees extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    
    protected static string $resource = CommitteeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
