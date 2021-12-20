<div class="p-6">
    <div class="text-center">
        <h3 class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
            @lang('organizer/costs/costs.create_cost.title')
        </h3>
        <div class="text-sm leading-normal mt-0 mb-2">
            @lang('organizer/costs/costs.create_cost.description')
        </div>
    </div>
    <div class="py-4">
        <x-tools.form submit="createCost">
            <x-slot name="form">
                <div class="my-2">
                    <x-jet-label for="type" value="Type"/>
                    <x-jet-input wire:model.defer="type" id="type" class="block mt-1 w-full" type="text" name="type" placeholder="Notary, Renovation, Agency fees..." :value="old('type')" required/>
                    @error('type') <span class="text-red-700">{{ $message }}</span> @enderror
                </div>
            </x-slot>
            <x-slot name="actions">
                <x-jet-button>
                    @lang('organizer/costs/costs.create_cost.save')
                </x-jet-button>
            </x-slot>
        </x-tools.form>
    </div>
</div>