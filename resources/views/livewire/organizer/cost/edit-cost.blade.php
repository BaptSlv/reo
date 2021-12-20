<tr class="bg-indigo-100 font-semibold text-black">
    @if(Auth::user()->teamRole(Auth::user()->currentTeam)->key === 'admin' || Auth::user()->teamRole(Auth::user()->currentTeam)->key === 'owner')
        <td colspan="4" class="p-2 text-xs">
            <form wire:submit.prevent="editCost">
                <div class="flex m-auto">
                    <input wire:model.defer="type" class="mr-3 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block w-5/6" type="text"/>
                    <button type="submit" class="inline-flex items-center p-2 bg-gray-800 border border-transparent rounded-md text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        @lang('organizer/costs/costs.edit_cost.edit')
                    </button>
                </div>
                @error('type') <span class="text-red-700">{{ $message }}</span> @enderror
            </form>
        </td>
    @else
        <td colspan="3" class="p-2 text-xs">
            <form wire:submit.prevent="editCost">
                <div class="flex m-auto">
                    <input wire:model.defer="type" class="mr-3 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block w-5/6" type="text"/>
                    <button type="submit" class="inline-inline-flex items-center p-2 bg-gray-800 border border-transparent rounded-md text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        @lang('organizer/costs/costs.edit_cost.edit')
                    </button>
                </div>
                @error('type') <span class="text-red-700">{{ $message }}</span> @enderror
            </form>
        </td>
    @endif
</tr>