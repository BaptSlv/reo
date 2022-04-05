<x-app-layout>
    <x-slot name="slot">
        @if(request()->routeIs('teamchat'))
            <livewire:teamchat.show-chats/>
        @endif
    </x-slot>
</x-app-layout>