@push('head')
    <script src="{{ mix('js/vue.js') }}" defer></script>
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="h2">
            {{ __('Shift Challenge') }}
        </h2>
    </x-slot>
    <div class="challenge-shift py-12" id="appVue">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <shift-challenge></shift-challenge>
        </div>
    </div>
</x-app-layout>
