<x-guest-layout>

<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">

        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Admin Login
        </h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <x-ui.input-label for="email" :value="__('Email')" />
                <x-ui.text-input 
                    id="email"
                    class="block mt-1 w-full"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                />
                <x-ui.input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-ui.input-label for="password" :value="__('Password')" />
                <x-ui.text-input
                    id="password"
                    class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required
                />
                <x-ui.input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember + Forgot -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="remember"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                    <span class="text-gray-600">Remember me</span>
                </label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                       class="text-indigo-600 hover:underline">
                        Forgot password?
                    </a>
                @endif
            </div>

            <!-- Submit -->
            <x-ui.primary-button class="w-full justify-center">
                Log in
            </x-ui.primary-button>

        </form>

    </div>
</div>

</x-guest-layout>