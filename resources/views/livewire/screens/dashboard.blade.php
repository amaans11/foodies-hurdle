<form form wire:submit.prevent="submit" class="flex flex-col justify-between min-h-body" xmlns:wire="http://www.w3.org/1999/xhtml">
    <div class="flex flex-col items-center">
        <div class="flex justify-center mt-10 mb-3">
            <img src="{{ asset('images/logo.png') }}" class="h-8" />
        </div>

        <div class="w-full max-w-md px-4 mx-auto">
            <div>
                <h1 class="py-10 mb-5 text-xl font-medium text-center text--secondary">You are signed in!</h1>
                <p class="mb-4 font-normal text-md text--secondary">We are currently under maintenance and apologize for
                    the
                    inconvenience. We will notify you as soon as possible.</p>
                <p class="mb-5 font-normal text-md text--secondary">Please reach out to us with any suggestions or
                    concerns:
                    <a class="font-bold text--secondary"
                        href="mailto:connections@mealstuff.com?subject=foodies">Connections@mealstuff.com</a></p>
                <p class="mb-2 font-normal text-md text--secondary">Thank you for your understanding.</p>

            </div>
        </div>
    </div>
    <div class="grid w-full max-w-md grid-cols-1 px-4 pb-8 mx-auto mt-8">
        <x-button href="{{ route('home') }}" as="a" class="w-full btn--primary">
            Ok
        </x-button>
    </div>

    <x-analytics-tracker page="dashboard" />
</form>
