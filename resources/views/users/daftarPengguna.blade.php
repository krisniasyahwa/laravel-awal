<!-- //Krisnia Syahwadani 6706223087 -->
<x-app-layout>
<div>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>
    
    <div class="py-12 bg-gray-900 flex flex-col items-center">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8 bg-gray-900">
            <div class="bg-gray-800 dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white dark:text-gray-100">
                    <a href="{{ route("user.registrasi") }}">
                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </a>
                    <div class="mt-6 relative overflow-hidden shadow-md sm:rounded-lg">
                    {{ $dataTable->table() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
</div>
</x-app-layout>

