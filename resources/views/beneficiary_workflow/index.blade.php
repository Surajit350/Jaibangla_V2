<x-app-layout>
    <x-slot name="header">
        <span class="text-2xl">{{ __('Manage Scheme') }}</span>
    </x-slot>
    <x-slot name="sub_header">
            Here you can select the Scheme for schemewise Beneficiary list.
    </x-slot>
    <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100 ">
            <div class="flex flex-col md:flex-row w-full mt-1">
                    <div class="w-full md:w-1/2 mt-1 text-gray-700">
                        <div class="mt-1 relative rounded-md">
                            @livewire('scheme-selection.schemes')
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
