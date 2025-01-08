<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Mail\ContactFormConfirmation;

class Home extends Component
{
    

    public $showContent = false;
    public $name = '';
    public $email = '';
    public $message = '';
    public $companies = [
        ['name' => 'Faghal MTN', 'logo' => 'img/faghallogo.jpeg'],
        ['name' => 'Chalenge', 'logo' => 'img/chalengelogo.png'],
        ['name' => 'Keyla Beauty', 'logo' => 'img/keylalogo.jpeg'],
        
       
    ];

    

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function mount()
    {
        $this->showContent = true;
        $this->dispatchBrowserEvent('start-carousel');
    }

    public function submit()
    {
        $this->validate();

        // Send email to admin
        Mail::to('Malkiellima@gmail.com')->send(new ContactFormSubmitted($this->name, $this->email, $this->message));

        // Send confirmation email to user
        Mail::to($this->email)->send(new ContactFormConfirmation($this->name));

        session()->flash('message', 'Votre message a été envoyé avec succès!');

        $this->reset(['name', 'email', 'message']);
    }

   
  

    public function render()
    {
        return view('livewire.home')->extends('clientFront.layouts.master')->section('content');
    }
}
