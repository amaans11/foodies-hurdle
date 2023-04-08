<form form wire:submit.prevent="submit" class="flex flex-col justify-between min-h-body">
    <div class="flex flex-col items-center">
        <div class="flex justify-center mt-10 mb-3">
            <img src="{{ asset('images/logo.png') }}" class="h-8" />
        </div>

        <div class="px-4 w-full max-w-md mx-auto">
            <div>
                <h1 class="text-xl font-medium mb-5 text--secondary text-center py-10">Woohoo,
                    {{ auth()->user()->name }}!<br>Your profile is complete.</h1>
                <p class="text-md font-normal mb-4 text--secondary">We are currently under maintenance and apologize for
                    the
                    inconvenience. We will notify you as soon as possible.</p>
                <p class="text-md font-normal mb-5 text--secondary">Please reach out to us with any suggestions or
                    concerns:
                    <a class="text--secondary font-bold"
                        href="mailto:connections@mealstuff.com?subject=foodies">Connections@mealstuff.com</a></p>
                <p class="text-md font-normal mb-2 text--secondary">Thank you for your understanding.</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 px-4 w-full max-w-md mx-auto pb-8 mt-8">
        <x-button as="a" href="{{ route('home') }}" class="btn--primary w-full">
            Ok
        </x-button>
    </div>

    <x-analytics-tracker page="surveyCompleted" />

    <script>
        window.addEventListener("load", function () {
            const prop_event = {
                content_type: 'hurdle',
                content_ids: [project],
                content_category: 'hurdle',
                project,
            };

            fbq('track', 'Lead', prop_event);
            const namespace = '240dbcea-7203-4370-8f00-8b5ec7d4a2be';
            const email = '{{ auth()->user()->email }}';
            const uuid = window.uuidv5(email, namespace);
            prop_event.email = email;
            analytics.identify(uuid, {
                email
            });
            analytics.track('Lead', prop_event);
        });

    </script>

</form>
