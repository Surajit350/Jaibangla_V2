
<div class="w-full bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 ">
    <div class=" flex flex-1 flex-col gap-0 md:flex-row md:gap-2.5">
      <div class="mb-4  md:w-1/2">
        <x-form.select name="gram panchyat" wire:model="resource">
            <option value="">Select</option>
            @foreach ($gp as $gps)
            <option value="{{ $gps->gram_panchyat_code }}">{{ $gps->gram_panchyat_name }}</option>
            @endforeach
        </x-form.select>

      </div>
      <div class="mb-4  md:w-1/2">
        <x-form.select name="Aadhar" wire:model="resource">
            <option value="">Select</option>
            <option value="1">Process without Aadhar</option>
            <option value="2">Process with Aadhar</option>
        </x-form.select>
      </div>
    </div>
    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Search
        </button>
    </div>
</div>
