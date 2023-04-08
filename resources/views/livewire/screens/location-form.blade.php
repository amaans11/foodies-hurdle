<form form wire:submit.prevent="submit" class="flex flex-col justify-between min-h-body">
    <div class="flex flex-col items-center">
        <div class="flex justify-center mt-10 mb-3">
            <img src="{{ asset('images/logo.png') }}" class="h-8" />
        </div>

        <div class="px-4 w-full max-w-md mx-auto">
            <div>
                <h1 class="text-xl font-medium mb-5 text--secondary text-center pb-10">Complete your profile</h1>
                <h1 class="text-4xl font-medium mb-5 text--secondary">My location is...</h1>

                <div class="mb-6">
                    <x-input
                        type="text"
                        class="w-full"
                        placeholder="City"
                        wire:model.defer="city"
                    />
                    @error('city') <p class="text-red-600 mt-2">{{ $message }}</p> @enderror
                </div>

                <div class="mb-6">
                    <x-select
                        class="w-full"
                        wire:model.defer="state"
                    >
                        <option value="">Choose state</option>
                        @foreach($options as $key => $text)
                            <option value="{{ $key }}">{{ $text }}</option>
                        @endforeach
                    </x-select>
                    @error('state') <p class="text-red-600 mt-2">{{ $message }}</p> @enderror
                </div>

            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 px-4 w-full max-w-md mx-auto pb-8 mt-8">
        <span></span>
        <x-button
            type="submit"
            class="btn--primary w-full relative"
            wire:loading.attr="disabled"
        >
            <p class="mr-6">Next</p>
            <i class="fas fa-arrow-right text-xl absolute right-5"></i>
        </x-button>
    </div>

   <x-analytics-tracker page="locationForm" />
</form>
