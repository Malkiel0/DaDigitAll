<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    

    public $showContent = false;

    

    public function mount()
    {
        $this->showContent = true;
    }

    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        // Logique d'envoi du message ici
        // Par exemple, vous pourriez enregistrer dans la base de données ou envoyer un e-mail

        session()->flash('message', 'Votre message a été envoyé avec succès!');

        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.home')->extends('clientFront.layouts.master')->section('content');
    }
}
