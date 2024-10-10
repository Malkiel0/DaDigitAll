<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Footer extends Component
{

    public $email = '';

    public function subscribe()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        // Logique d'abonnement à la newsletter ici
        // Par exemple, vous pourriez enregistrer l'email dans la base de données

        session()->flash('message', 'Vous êtes maintenant abonné à notre newsletter!');
        $this->email = '';
    }
    
    public function render()
    {
        return view('livewire.footer')->extends('clientFront.layouts.master')->section('content');
    }
}
