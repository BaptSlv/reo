<tr class="bg-indigo-100 font-semibold text-black">
    <td colspan="3" class="p-2 text-xs">
        @lang('organizer/costs/costs.delete_cost.description')
    </td>
    <td colspan="1" class="p-2 text-xs">
        <form wire:submit.prevent="deleteCost">
            <button type="submit" class="inline-flex items-center p-2 bg-gray-800 border border-transparent rounded-md text-white tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                @lang('organizer/costs/costs.delete_cost.delete')
            </button>
        </form>
    </td>
</tr>