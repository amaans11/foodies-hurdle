<?php

namespace App\Http\Livewire\Screens;

use Livewire\Component;

class SurveyCompleted extends Component
{
    public function render()
    {
        return view('livewire.screens.survey-completed')
            ->layout('layouts.app', ['background' => asset('images/bg3.svg')]);
    }
}
