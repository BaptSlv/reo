<div>
    <button wire:click="addChat" class="flex flex-row items-center w-full bg-indigo-500 hover:bg-indigo-400 rounded-xl text-white">
        <div class="flex items-center justify-center h-8 w-8 rounded-full">
            <i class="fas fa-plus-circle"></i>
        </div>
        <div class="ml-2 text-sm font-semibold">@lang('teamchat/teamchat.create_chat.title')</div>
    </button>
    <x-jet-dialog-modal wire:model="addChat">
        <x-slot name="title">
            @lang('teamchat/teamchat.create_chat.title')
        </x-slot>
        <x-slot name="content">
            <form wire:submit.prevent="createChat">
                <div class="flex flex-wrap mx-auto">
                    <div class="w-full lg:w-8/12 px-4">
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                @lang('teamchat/teamchat.create_chat.name')
                            </label>
                            <input wire:model.defer="name" type="text" placeholder="@lang('teamchat/teamchat.create_chat.placeholder')" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                            @error('name')<span class="text-red-600 error"> {{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="flex flex-row-reverse lg:mt-7 px-6 py-4 bg-gray-100 text-right">
                    <x-jet-button type="sumit">
                        @lang('teamchat/teamchat.create_chat.create')
                    </x-jet-button>
                    <x-jet-secondary-button class="mr-6" wire:click="$toggle('addChat')" wire:loading.attr="disabled">
                        @lang('teamchat/teamchat.create_chat.cancel')
                    </x-jet-secondary-button>
                </div>
            </form>
        </x-slot>
    </x-jet-dialog-modal>
</div>