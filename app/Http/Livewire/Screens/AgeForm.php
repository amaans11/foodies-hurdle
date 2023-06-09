<?php

namespace App\Http\Livewire\Screens;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AgeForm extends Component
{
    public string $age = '';

    protected $rules = [
        'age' => ['required', 'string'],
    ];

    public function submit()
    {
        $this->validate();

        $user = Auth::user();
        $user->data->put('age', $this->age);
        $user->save();

        return redirect()->route('lookingForForm');
    }

    public function render()
    {
        $options = [
            '18-34' => '18-34',
            '34-45' => '34-45',
            '45-54' => '45-54',
            '55+' => '55+',
        ];

        return view('livewire.screens.age-form', ['options' => $options])
            ->layout('layouts.app', ['background' => asset('images/bg2.svg')]);
    }
}
