<x-app-layout>
    {{-- <x-slot name="header">
        <span class="text-2xl">{{ __('Workflow') }}</span>
    </x-slot>
    <x-slot name="sub_header">
            Here you can verify the beneficiary.
    </x-slot>
    <x-container>
        <x-slot name="title">
            {{ __('Searching Criteria') }}
        </x-slot>
        <x-slot name="body">

                    @livewire('beneficiary-workflow.workflow')

        </x-slot>
    </x-container> --}}
    <x-slot name="header">
        <span class="text-2xl">{{ __('Manage Workflow') }}</span>
    </x-slot>
    <x-slot name="sub_header">
            Here you can proccess beneficiary.
    </x-slot>
    @livewire('beneficiary-workflow.workflow')
    @livewire('beneficiary-workflow.beneficiary-list')
</x-app-layout>
