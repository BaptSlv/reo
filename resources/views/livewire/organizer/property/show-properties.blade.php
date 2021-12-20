<div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap mt-4">
        <div class="w-full px-4 mb-12">
            @if($properties->count())
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white p-5 lg:p-10">
                    <div class="font-sans text-black bg-white overflow-hidden flex">
                        <input wire:model.debounce.500ms="search" type="text" class="px-3 py-3 placeholder-indigo-400 relative bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-4" placeholder="@lang('organizer/properties/properties.search')">
                        <button class="flex items-center justify-center -ml-2 pl-5 pr-3 bg-indigo-500 rounded">
                            <svg class="h-4 w-4 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="grid lg:grid-cols-3 gap-10 lg:gap-20 my-10 my-10">
                        @foreach($properties as $property)
                            <div class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                <div class="relative pb-48 overflow-hidden">
                                    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset($property->image) }}" alt="">
                                </div>
                                <div class="p-4">
                                    <div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
                                        <div @click="open = ! open">
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-2 py-1 border bg-yellow-300 text-yellow-800 text-xs leading-4 font-bold uppercase rounded-full hover:bg-yellow-800 hover:text-yellow-300 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                                {{ ucfirst($property->status) }}
                                                <svg class="ml-1 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </span>
                                        </div>
                                        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 mt-2 60 rounded-md shadow-lg origin-top-right right-0 " style="display: none;" @click="open = false">
                                            <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                                                <div class="w-48">
                                                    <livewire:organizer.property.update-status :property="$property" :key="$property->id"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="mt-2 mb-2  font-bold">{{ $property->label }} - {{ $property->area }} {{ $property->measurement_unit }}</h2>
                                    @if($property->address_2)
                                        <p class="text-sm">
                                            {{ $property->address_1 }} - {{ $property->address_2 }}
                                        </p>
                                    @else
                                        <p class="text-sm">
                                            {{ $property->address_1 }}
                                        </p>
                                    @endif
                                    <p class="text-sm">
                                        {{ $property->zipcode }} {{ $property->city }}
                                    </p>
                                    <p class="text-sm">
                                        {{ $property->country }}
                                    </p>
                                    <div class="mt-3 flex items-center">
                                        <span class="text-sm font-semibold">@lang('organizer/properties/properties.property_card.purchase_price')</span>&nbsp;<span class="font-bold text-xl">{{ number_format($property->purchase_price, 1, ',', ' ') }}</span>&nbsp;<span class="text-sm font-semibold">{{ $property->currency }}</span>
                                    </div>
                                </div>
                                <div class="p-4 border-t border-b text-xs text-gray-700">
                                    @if($property->costs->count())
                                        @if($showCosts === $property->id)
                                            <div class="mb-4">
                                                @foreach($property->costs as $cost)
                                                    @if($cost->pivot->name)
                                                        <span class="flex items-center mb-1">
                                                        <i class="fas fa-money-bill-wave mr-2 text-gray-700"></i>{{ $cost->pivot->name }} : {{ number_format($cost->pivot->amount, 1, ',', ' ') }} {{ $property->currency }}
                                                    </span>
                                                    @else
                                                        <span class="flex items-center mb-1">
                                                        <i class="fas fa-money-bill-wave text-gray-800"></i>{{ ucfirst($cost->type) }} : {{ number_format($cost->pivot->amount, 1, ',', ' ') }} {{ $property->currency }}
                                                    </span>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @endif
                                        <span wire:click="showPropertyCosts({{ $property->id }})" class="flex items-center mb-1 text-indigo-500 cursor-pointer">
                                        <i class="fas fa-coins mr-2"></i> <p class="underline"><b>@lang('organizer/properties/properties.property_card.total_price')</b> {{ number_format($property->total_price, 1, ',', ' ') }} {{ $property->currency }}</p>
                                    </span>
                                    @else
                                        <span class="flex items-center my-1 text-indigo-500">
                                        <i class="fas fa-coins mr-2"></i> <p><b>@lang('organizer/properties/properties.property_card.total_price')</b> {{ number_format($property->total_price, 1, ',', ' ') }} {{ $property->currency }}</p>
                                    </span>
                                    @endif
                                </div>
                                <div class="p-4 flex items-center text-sm text-gray-600">
                                    <a href="{{ route('organizer.edit-property', $property->id) }}" class="bg-indigo-500 text-white font-bold uppercase text-xs px-5 py-3 rounded shadow hover:shadow-md outline-none focus:outline-none mr-auto ease-linear transition-all duration-150">
                                        @lang('organizer/properties/properties.property_card.edit')
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $properties->links() }}
                </div>
            @else
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white p-5 lg:p-10">
                    <div class="block w-full overflow-x-auto">
                        <x-jet-application-logo class="block h-20 w-auto"/>
                        <div class="mt-6 text-2xl">
                            @lang('organizer/properties/properties.no_property.welcome')
                        </div>
                        <div class="my-6 text-gray-600">
                            <p class="mb-4">@lang('organizer/properties/properties.no_property.first_step')</p>
                            <a class="bg-indigo-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" href="{{ route('organizer.configure') }}">@lang('organizer/properties/properties.no_property.button_first')</a>
                        </div>
                        <div class="my-6 text-gray-600">
                            <p class="mb-4">@lang('organizer/properties/properties.no_property.second_step')</p>
                            <a class="bg-indigo-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" href="{{ route('organizer.add-property') }}">@lang('organizer/properties/properties.no_property.button_second')</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>