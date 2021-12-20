<section>
    <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-8/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-xl font-bold">
                                <i class="fas fa-money-bill-wave mr-2"></i> @lang('organizer/costs/costs.title')
                            </h6>
                        </div>
                    </div>
                    <div class="flex-auto">
                        <div class="w-full">
                            <div class="relative flex flex-col min-w-0 break-words w-fullshadow-lg rounded bg-pink-900 text-white">
                                <div class="block w-full overflow-x-auto">
                                    <table class="items-center w-full bg-transparent border-collapse">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="px-6 border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold bg-indigo-800">
                                                    @lang('organizer/costs/costs.type')
                                                </th>
                                                <th class="px-6 border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold bg-indigo-800">
                                                    @lang('organizer/costs/costs.linked_properties')
                                                </th>
                                                <th class="px-6 border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold  bg-indigo-800">
                                                    @lang('organizer/costs/costs.edit')
                                                </th>
                                                @if(Auth::user()->teamRole(Auth::user()->currentTeam)->key === 'admin' || Auth::user()->teamRole(Auth::user()->currentTeam)->key === 'owner')
                                                    <th class="px-6 border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold bg-indigo-800 ">
                                                        @lang('organizer/costs/costs.delete')
                                                    </th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($teamCosts as $cost)
                                                <tr class="text-center bg-indigo-500 font-semibold">
                                                    <td class="px-4 py-3 border-b border-indigo-200">{{ ucfirst($cost->type) }}</td>
                                                    <td class="px-4 py-3 border-b border-indigo-200">
                                                        <p class="underline cursor-pointer" wire:click="showCostProperties({{ $cost->id }})">{{ $cost->properties->count() }}</p>
                                                    </td>
                                                    <td class="px-4 py-3 border-b border-indigo-200">
                                                        <button wire:click="showEditCost({{ $cost->id }})"><i class="fas fa-pencil-alt"></i></button>
                                                    </td>
                                                    @if(Auth::user()->teamRole(Auth::user()->currentTeam)->key === 'admin' || Auth::user()->teamRole(Auth::user()->currentTeam)->key === 'owner')
                                                        <td class="px-4 py-3 border-b border-indigo-200">
                                                            <button wire:click="showDeleteCost({{ $cost->id }})"><i class="far fa-trash-alt"></i></button>
                                                        </td>
                                                    @endif
                                                </tr>
                                                @if($showProperties === $cost->id && $cost->properties->count() !== 0)
                                                    @foreach($cost->properties as $property)
                                                        <tr class="text-center bg-indigo-100 font-semibold text-black">
                                                            <td class="p-2 text-xs border-b border-indigo-200">
                                                                {{ $property->label }}
                                                            </td>
                                                            @if($property->pivot->name)
                                                                <td class="p-2 text-xs border-b border-indigo-200">
                                                                    {{ $property->pivot->name }}
                                                                </td>
                                                            @else
                                                                <td class="p-2 text-xs border-b border-indigo-200">
                                                                    {{ $cost->type }}
                                                                </td>
                                                            @endif
                                                            <td class="p-2 text-xs border-b border-indigo-200" colspan="2">
                                                                {{ $property->pivot->amount }} {{ $property->currency }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                @if($editId === $cost->id)
                                                    <livewire:organizer.cost.edit-cost :cost="$cost" :type="$cost->type" :key="time().$cost->id"/>
                                                @endif
                                                @if($deleteId === $cost->id)
                                                    <livewire:organizer.cost.delete-cost :cost="$cost" :key="time().$cost->id"/>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-4/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
                    <livewire:organizer.cost.create-cost/>
                </div>
            </div>
        </div>
    </div>
</section>