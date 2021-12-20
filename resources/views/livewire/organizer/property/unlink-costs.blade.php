<div>
    <div wire:click="removeCosts" class="items-center cursor-pointer underline font-bold text-white">
        <i class="fas fa-trash-alt"></i>
    </div>
    <x-jet-dialog-modal wire:model="removeCosts">
        <x-slot name="title">
            @lang('organizer/properties/properties.edit_property.costs_card.remove_cost.description') <b>{{ $property->label }}</b>
        </x-slot>
        <x-slot name="content">
            <div class="flex flex-wrap mx-auto">
                <div class="w-full px-4">
                    <p>
                        @lang('organizer/properties/properties.edit_property.costs_card.remove_cost.sure')
                    </p>
                    <p>
                        <b>@if(! empty($pivotCost->name) || $pivotCost->name) {{ $pivotCost->name }} - @else {{ ucfirst($cost->type) }} - @endif {{ number_format($pivotCost->amount, 1, ',', ' ') }} {{ $property->currency }}</b>
                    </p>
                    <p>
                        @lang('organizer/properties/properties.edit_property.costs_card.remove_cost.explication')
                    </p>
                </div>
            </div>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('removeCosts')" wire:loading.attr="disabled">
                    @lang('organizer/properties/properties.edit_property.costs_card.add_cost.cancel')
                </x-jet-secondary-button>
                <x-jet-danger-button class="mr-6" wire:click="unlinkCost({{ $pivotCost }})">
                    @lang('organizer/properties/properties.edit_property.costs_card.remove_cost.remove')
                </x-jet-danger-button>
            </x-slot>
        </x-slot>
    </x-jet-dialog-modal>
</div>
