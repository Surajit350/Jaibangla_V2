<x-app-layout>
    <x-slot name="header">
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
            <div class="flex justify-center mb-8">
                <div class="w-full md:w-2/3">
                    @livewire('beneficiary-workflow.workflow')
                </div>
            </div>
        </x-slot>
    </x-container>
</x-app-layout>
