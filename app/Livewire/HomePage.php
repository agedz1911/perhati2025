<?php

namespace App\Livewire;

use App\Models\sponsor;
use App\Models\User;
use App\Models\WelcomeMessage;
use Livewire\Attributes\Title;
use Livewire\Component;


// *global title
#[Title('Home - KONAS XX PERHATI-KL')]


// class HomePage extends Component
// {
//     public User $user;

//     public function render()
//     {
//         return view('livewire.home-page')->title($this->user->name);
//     }
// }
class HomePage extends Component
{

    public function render()
    {
        $sponsors = sponsor::where('is_active', true)->orderBy('no_urut', 'asc')->take(10)->get();
        $messages = WelcomeMessage::where('is_active', 1)->orderBy('no_urut', 'asc')->get();
        return view('livewire.home-page', ['messages' => $messages, 'sponsors' => $sponsors]);
    }
}
