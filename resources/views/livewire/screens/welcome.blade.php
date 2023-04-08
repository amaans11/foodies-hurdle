<div class="flex flex-col justify-between min-h-screen">
    <div class="flex justify-center my-10">
        <img src="{{ asset('images/logo.png') }}" class="h-8" />
    </div>

    <div class="h-full px-4 w-full max-w-md mx-auto">
        <div class="text-center">
            <h1 class="text-3xl font-medium mb-3 text--secondary">It is time you find your foodie soulmate</h1>

            <p class="mb-12 text-gray-600">Let us do the vetting for you. Love is in the air.<br>What are waiting for?
                Sign up now!</p>

            <x-button as="a" class="w-full mb-6 bg-white text-gray-600" href="{{ url('auth/facebook') }}">
                <i class="fab fa-facebook-square text-2xl text-blue-700 mr-3"></i>
                Sign up with Facebook
            </x-button>

            <p class="text-sm text-center text-gray-600 my-5">
                {{ __('screens.welcome.or_sign_up_with_email') }}
            </p>

            <x-button as="a" class="w-full btn--primary" href="{{ route('register') }}">
                <i class="fas fa-envelope text-xl mr-3"></i>
                {{ __('screens.welcome.create_an_account') }}
            </x-button>

            <p class="text-sm text-center text-gray-600 mt-5">
                {!! __('screens.welcome.already_have_account', ['href' => route('login')]) !!}
            </p>
        </div>
    </div>

    <div>
        <p class="text-center my-8 text-xs text-gray-600">{!! __('screens.welcome.terms', ['termsHref' => 'https://www.myfoodandfamily.com/useragreement', 'privacyHref' => 'https://www.myfoodandfamily.com/privacynotice']) !!}</p>
        <p class="text-center my-8 text-xs text-gray-600">{!! __('screens.welcome.company_copyright') !!}</p>
    </div>

    <x-analytics-tracker page="welcome" />
</div>
