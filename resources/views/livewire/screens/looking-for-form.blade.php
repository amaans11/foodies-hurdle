<form form wire:submit.prevent="submit" class="flex flex-col justify-between min-h-body">
    <div class="flex flex-col items-center">
        <div class="flex justify-center mt-10 mb-3">
            <img src="{{ asset('images/logo.png') }}" class="h-8" />
        </div>

        <div class="px-4 w-full max-w-md mx-auto">
            <div>
                <h1 class="text-xl font-medium mb-5 text--secondary text-center pb-10">Complete your profile</h1>
                <h1 class="text-4xl font-medium mb-2 text--secondary">What are you looking for?</h1>
                <h1 class="text-md font-medium mb-5 text-center text--secondary">Please select all that applies</h1>

                <div class="grid grid-cols-2 gap-2">
                    @foreach($options as $key => $text)
                        <x-checkbox-card
                            name="lookingForOptions"
                            type="checkbox"
                            value="{{ $key }}"
                            checked="{{ in_array($key, $lookingForOptions) ? 'true' : 'false' }}"
                            label-class="{{ $key === 'someone_with_same_food_preferences' ? 'col-span-2' : '' }}"
                            class="py-0"
                            style="min-height: 64px"
                        >
                            {{ $text }}
                        </x-checkbox-card>
                    @endforeach
                </div>
                @error('lookingForOptions') <p class="text-red-600 mt-2">{{ $message }}</p> @enderror
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-6 px-4 w-full max-w-md mx-auto pb-8 mt-8">
        <x-button
            as="a"
            href="{{ route('genderForm') }}"
            class="btn--white w-full relative"
            wire:loading.attr="disabled"
        >
            <p class="ml-6">Back</p>
            <i class="fas fa-arrow-left text-xl absolute left-5"></i>
        </x-button>
        <x-button
            type="submit"
            class="btn--primary w-full relative"
            wire:loading.attr="disabled"
        >
            <p class="mr-6">Next</p>
            <i class="fas fa-arrow-right text-xl absolute right-5"></i>
        </x-button>
    </div>

   <x-analytics-tracker page="lookingFor" />
</form>
