<?php

namespace App\Livewire\Pages;

use App\Models\GuidelineAbstract;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Submission - KONAS XX PERHATI-KL')]
class Submission extends Component
{
    public function render()
    {
        $guidelines = GuidelineAbstract::orderBy('no_urut', 'asc', 'asc')->get();
        return view('livewire.pages.submission', ['guidelines' => $guidelines]);
    }
}
