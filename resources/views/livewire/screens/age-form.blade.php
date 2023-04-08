<form form wire:submit.prevent="submit" class="flex flex-col justify-between min-h-body">
    <div class="flex flex-col items-center">
        <div class="flex justify-center mt-10 mb-3">
            <img src="{{ asset('images/logo.png') }}" class="h-8" />
        </div>

        <div class="px-4 w-full max-w-md mx-auto">
            <div>
                <h1 class="text-xl font-medium mb-5 text--secondary text-center pb-10">Complete your profile</h1>
                <h1 class="text-4xl font-medium mb-5 text--secondary">I am...</h1>

                <div class="grid grid-cols-2 gap-2">
                    @foreach($options as $key => $text)
                    <x-checkbox-card name="age" type="radio" value="{{ $key }}"
                        checked="{{ $key === $age ? 'true' : 'false' }}">
                        {{ $text }}
                    </x-checkbox-card>
                    @endforeach
                </div>
                @error('age') <p class="text-red-600 mt-2">{{ $message }}</p> @enderror
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-6 px-4 w-full max-w-md mx-auto pb-8 mt-8">
        <x-button as="a" href="{{ route('genderForm') }}" class="btn--white w-full relative"
            wire:loading.attr="disabled">
            <p class="ml-6">Back</p>
            <i class="fas fa-arrow-left text-xl absolute left-5"></i>
        </x-button>
        <x-button type="submit" class="btn--primary w-full relative" wire:loading.attr="disabled">
            <p class="mr-6">Next</p>
            <i class="fas fa-arrow-right text-xl absolute right-5"></i>
        </x-button>
    </div>

    <x-analytics-tracker page="ageForm" />
</form>
