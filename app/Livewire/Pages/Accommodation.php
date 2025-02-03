<?php

namespace App\Livewire\Pages;

use App\Models\Accommodation as ModelsAccommodation;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Accommodation - KONAS XX PERHATI-KL')]
class Accommodation extends Component
{
    public function render()
    {
        //$accommodations = ModelsAccommodation::where('is_active', 1)->get();
        $accommodations = ModelsAccommodation::all();
        return view('livewire.pages.accommodation', ['accommodations' => $accommodations]);
    }
}
