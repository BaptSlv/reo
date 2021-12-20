<x-app-layout>
    <x-slot name="slot">
        @if(request()->routeIs('organizer'))
            <livewire:organizer.property.show-properties/>
        @elseif(request()->routeIs('organizer.configure'))
            <livewire:organizer.cost.show-costs/>
        @elseif(request()->routeIs('organizer.add-property'))
            <livewire:organizer.property.create-property/>
        @elseif(request()->routeIs('organizer.edit-property'))
            <livewire:organizer.property.edit-property/>
        @endif
    </x-slot>
</x-app-layout>