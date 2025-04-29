<?php

namespace App\Livewire\Resources;

use App\Models\Faculty as ModelsFaculty;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Faculty extends Component
{
    use WithPagination, WithoutUrlPagination;
    
    public function render()
    {
        $faculties = ModelsFaculty::where('is_active', 1)->orderBy('no_urut', 'asc')->get();
        return view('livewire.resources.faculty', ['faculties' => $faculties]);
    }
}
