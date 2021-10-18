<x-app-layout>
    <x-slot name="header">
        <h2 class="h2">
            {{ __('Challenges') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="mb-4">
                        Aliquam erat volutpat. Donec non accumsan dolor. Vestibulum rutrum posuere aliquet. Ut consectetur feugiat aliquam. Aenean eleifend molestie tortor, ut hendrerit libero tincidunt a. Sed faucibus tellus consequat orci auctor congue. Suspendisse elementum orci sit amet posuere condimentum. Sed non lorem et purus tempor maximus non eu sem.
                    </p>
                    <a class="button primary" href="{{route('challenges.shit-challenge')}}">Shift challenge</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
