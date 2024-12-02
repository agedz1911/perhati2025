<?php

namespace App\Filament\Resources\GuidelineAbstractResource\Pages;

use App\Filament\Resources\GuidelineAbstractResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGuidelineAbstracts extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = GuidelineAbstractResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
