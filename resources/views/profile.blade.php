<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <!-- Profile Content -->
    @livewire('profile-component')

    <!-- Modal Component -->
    @livewire('modal-component')
</x-app-layout>
