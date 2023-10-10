<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- fullname -->
        <div class="mt-4">
            <x-input-label for="fullname" :value="__('Fullname')" />
            <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')"
                required autofocus autocomplete="fullname" />
            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- birthdate -->
        <div class="mt-4">
            <x-input-label for="birthdate" :value="__('Tanggal Lahir')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')"
                required autofocus autocomplete="birthdate" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <!-- phoneNumber -->
        <div class="mt-4">
            <x-input-label for="phoneNumber" :value="__('No. Telepon')" />
            <x-text-input id="phoneNumber" class="block mt-1 w-full" type="tel" name="phoneNumber"
                :value="old('phoneNumber')" required autofocus autocomplete="phoneNumber" />
            <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
        </div>

        <!-- Religion -->
        <div class="mt-4">
            <x-input-label for="religion" :value="__('Agama')" />
            <x-text-input id="religion" class="block mt-1 w-full" type="tel" name="religion"
                :value="old('religion')" required autofocus autocomplete="religion" />
            <x-input-error :messages="$errors->get('religion')" class="mt-2" />
        </div>

         <!-- Gender -->
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Jenis Kelamin')" />

            <div class="mt-2">
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="gender" value="Laki-Laki"
                        {{ old('gender') === 'Laki-Laki' ? 'checked' : '' }} required autofocus>
                    <span class="ml-2">Laki-Laki</span>
                </label>

                <label class="inline-flex items-center ml-6">
                    <input type="radio" class="form-radio" name="gender" value="Perempuan"
                        {{ old('gender') === 'Perempuan' ? 'checked' : '' }} required>
                    <span class="ml-2">Perempuan</span>
                </label>

                <!-- Jika Anda ingin menambahkan opsi lainnya, Anda bisa menambahkan label dan input radio baru di sini. -->
            </div>

    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
</div>



        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>