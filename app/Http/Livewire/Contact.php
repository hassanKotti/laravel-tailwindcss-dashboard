<?php

namespace App\Http\Livewire;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.contact', [
            'contacts' => ModelsContact::paginate(10),
        ]);
    }
}
