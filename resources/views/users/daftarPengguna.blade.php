//Krisnia Syahwadani 6706223087
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white dark:text-gray-100">
                    <a href="{{ route("user.registrasi") }}">
                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </a>
                    <div class="mt-6 relative overflow-hidden shadow-md sm:rounded-lg">
                        <table class="w-full border rounded-lg overflow-hidden text-sm text-left text-gray-300 dark:text-white">
                            <thead class="text-xs bg-stone-500 dark:bg-stone-600 dark:text-gray-300">
                                <tr>
                                    <th scope="col" class="px-6 py-3 uppercase">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3 uppercase">
                                        Full Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 uppercase">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-3 uppercase">
                                        Username
                                    </th>
                                    <th scope="col" class="px-6 py-3 uppercase">
                                        Alamat
                                    </th>
                                    <th scope="col" class="px-6 py-3 uppercase">
                                        Nomor HP
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-36 uppercase">
                                        Tanggal Lahir
                                    </th>
                                    <th scope="col" class="px-6 py-3 uppercase">
                                        Agama
                                    </th>
                                    <th scope="col" class="px-6 py-3 w-36 uppercase">
                                        Jenis Kelamin
                                    </th>
                                    <th colspan="2" scope="col" class="px-6 py-3 text-center uppercase">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="bg-stone-600 dark:bg-stone-700 hover:bg-stone-800 dark:hover:bg-stone-800">
                                        <td class="w-4 p-4">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                                            {{ $user->fullName }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->email }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->username }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->address }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->phoneNumber }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->birthdate }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $user->agama }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($user->jenisKelamin == 0)
                                                <span>Pria</span>
                                            @else
                                                <span>Wanita</span>
                                            @endif
                                        </td>
                                        <td colspan="2" class="flex items-center justify-center gap-4 px-6 py-4">
                                            <button class="font-medium text-yellow-300 dark:text-yellow-500 hover:underline">Edit</button>
                                            <form action="{{ route("user.infoPengguna", $user->id) }}">
                                                <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</button>
                                            </form>
                                            <button href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
