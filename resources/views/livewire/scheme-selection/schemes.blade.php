<div>
    <x-form.select name="scheme_id"
    class="rounded-md w-full border-gray-500 text-gray-500 sm:text-sm" wire:model="scheme_id" wire:change="schemeSelection($event.target.value)" required>
    <option value="">Please Select Scheme</option>
    @foreach ($scheme_list as $scheme)
        <option value="{{ $scheme->department_id }}">{{ $scheme->name }}</option>
    @endforeach
</x-form.select>
</div>

