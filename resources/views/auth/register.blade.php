
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
        @livewireStyles
        <x-jet-validation-errors class="mb-4" />
@livewire('register-component')
    </x-jet-authentication-card>
    @livewireScripts
</x-guest-layout>
