<?php

namespace App\Http\Livewire\Screens;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LookingForForm extends Component
{
    public array $lookingForOptions = [];

    protected $rules = [
        'lookingForOptions' => ['required', 'array'],
        'lookingForOptions.*' => ['required', 'string'],
    ];

    public function submit()
    {
        $this->validate();
        $user = Auth::user();
        $user->data->put('lookingFor', $this->lookingForOptions);
        $user->data->put('hurdle_process', 'done');

        $user->save();

        return redirect()->route('surveyCompleted');
    }

    public function render()
    {
        $options = [
            'perfect_date_night' => 'A perfect date night',
            'background_checks_safety' => 'Background checks / Safety',
            'new_restaurants' => 'New restaurants',
            'life_partner' => 'Life partner',
            'discounts_on_meal' => 'Discounts on meal',
            'casual_dating' => 'Casual dating',
            'someone_with_same_food_preferences' => 'Someone with same food preferences',
        ];

        return view('livewire.screens.looking-for-form', ['options' => $options])
            ->layout('layouts.app', ['background' => asset('images/bg2.svg')]);
    }
}
