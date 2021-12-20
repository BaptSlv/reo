<div class="block px-4 py-2 text-xs text-gray-400">
    Change Status
    @foreach($propertiesStatus as $status)
        @if($status !== $property->status)
            <a wire:click="changeStatus({{ $property }}, '{{ $status }}')" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="#">
                <div class="flex items-center">
                    <div class="truncate">
                        {{ ucfirst($status) }}
                    </div>
                </div>
            </a>
        @endif
    @endforeach
</div>