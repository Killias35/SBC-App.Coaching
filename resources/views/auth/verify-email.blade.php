<x-guest-layout>
    <div class="min-h-screen flex flex-col items-center justify-center pt-6 sm:pt-0">

        <!-- Logo -->
        <div class="mb-6">
            <x-application-logo class="w-24 h-24 text-red-600 drop-shadow-lg" />
        </div>

        <!-- Card -->
        <div class="w-full sm:max-w-md px-6 py-8 bg-gray-900/80 backdrop-blur rounded-3xl shadow-2xl border border-gray-700 space-y-6">

            <!-- Info Text -->
            <div class="text-center text-gray-300 text-sm">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            <!-- Status Message -->
            @if (session('status') == 'verification-link-sent')
                <div class="text-center text-green-400 font-medium text-sm">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <!-- Actions -->
            <div class="flex flex-col gap-4">
                <!-- Resend Verification Email -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <x-primary-button class="w-full bg-red-600 hover:bg-red-700 rounded-2xl font-bold tracking-wide py-2 shadow-lg">
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </form>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-center text-gray-200 hover:text-red-500 font-semibold rounded-2xl py-2 border border-gray-700 transition">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
