<div>
    <button wire:click="addCosts" class="bg-indigo-500 text-white font-bold uppercase text-xs px-3 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
        <i class="fas fa-link mr-2"></i> @lang('organizer/properties/properties.edit_property.costs_card.add_cost.title')
    </button>
    <x-jet-dialog-modal wire:model="addCosts">
        <x-slot name="title">
                @lang('organizer/properties/properties.edit_property.costs_card.add_cost.description') <b>{{ $property->label }}</b>
        </x-slot>
        <x-slot name="content">
            <form wire:submit.prevent="linkCost">
                <div class="flex flex-wrap mx-auto">
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                @lang('organizer/properties/properties.edit_property.costs_card.name')
                            </label>
                            <input wire:model.defer="name" type="text" placeholder="Frais de notaire" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('name')<span class="text-red-600 error"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                @lang('organizer/properties/properties.edit_property.costs_card.amount')*
                            </label>
                            <input wire:model.defer="amount" type="number" step=0.1 placeholder="19000" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('amount')<span class="text-red-600 error"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                @lang('organizer/properties/properties.edit_property.costs_card.add_cost.type')*
                            </label>
                            <select wire:model.defer="type" id="type" name="type" autocomplete="type" class="mt-1 block w-full py-3 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>@lang('organizer/properties/properties.edit_property.costs_card.add_cost.choose_type')</option>
                                @foreach($costs as $cost)
                                    <option value="{{ $cost->id }}">{{ ucfirst($cost->type) }}</option>
                                @endforeach
                            </select>
                            @error('type') <span class="text-red-600 error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="flex flex-row-reverse lg:mt-7 px-6 py-4 bg-gray-100 text-right">
                    <x-jet-button type="sumit">
                        @lang('organizer/properties/properties.edit_property.costs_card.add_cost.link')
                    </x-jet-button>
                    <x-jet-secondary-button class="mr-6" wire:click="$toggle('addCosts')" wire:loading.attr="disabled">
                        @lang('organizer/properties/properties.edit_property.costs_card.add_cost.cancel')
                    </x-jet-secondary-button>
                </div>
            </form>
        </x-slot>
    </x-jet-dialog-modal>
</div>
