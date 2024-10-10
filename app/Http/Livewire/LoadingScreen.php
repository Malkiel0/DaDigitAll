<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoadingScreen extends Component
{

    public $isLoading = true;

    public function mount()
    {
        $this->dispatchBrowserEvent('content-ready');
    }

    public function render()
    {
        return view('livewire.loading-screen')->extends('clientFront.layouts.master')->section('content');
    }
}
