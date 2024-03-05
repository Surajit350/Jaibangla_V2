<x-app-layout>
   
    <x-slot name="header">
        <span class="text-2xl">{{ __('Manage Workflow') }}</span>
    </x-slot>
    <x-slot name="sub_header">
            Here you can proccess beneficiary.
    </x-slot>
    @livewire('beneficiary-workflow.workflow')
    @livewire('beneficiary-workflow.beneficiary-list', ['scheme_id' => $scheme_id])
</x-app-layout>
