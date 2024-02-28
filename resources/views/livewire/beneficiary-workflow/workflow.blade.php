
    <div class="flex flex-col gap-0 md:flex-row md:gap-2.5">
        <div class="w-full md:w-1/2">
            <x-form.select name="gram_panchyat" wire:model="resource">
                <option value="">--Select--</option>
                @foreach ($gp as $gps)
                <option value="{{ $gps->gram_panchyat_code }}">{{ $gps->gram_panchyat_name }}</option>
                @endforeach
            </x-form.select>
        </div>
        <div class="w-full md:w-1/2">
            <x-form.select name="aadhar" wire:model="resource">
                <option value="1">Application with Aadhar Number</option>
                <option value="2">Application without Aadhar Number</option>
                {{-- @foreach ($resources as $resource)
                <option value="{{ $resource->id }}">{{ $resource->name }}</option>
                @endforeach --}}
            </x-form.select>
        </div>
        <div>
            <button>ok</button>
        </div>
    </div>
