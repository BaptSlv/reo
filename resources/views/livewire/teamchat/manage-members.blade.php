<div>
    <button wire:click="manageMembers" class="flex flex-row items-center w-full text-xs underline text-gray-500 hover:text-gray-800">
        {{ $targetedChat->users->count() }} @lang('teamchat/teamchat.show_chats.members')
    </button>
    <x-jet-dialog-modal wire:model="manageMembers">
        <x-slot name="title">
            @lang('teamchat/teamchat.manage_members.title') - {{ $targetedChat->name }}
        </x-slot>
        <x-slot name="content">
            <div class="flex mb-10">
                @foreach($targetedChat->users as $user)
                    @if($user->id === Auth::user()->id)
                        @if(!is_null($targetedChatOwner) && Auth::user()->id !== $targetedChatOwner->id)
                            <div class="mx-5 text-indigo-500">
                                <p>{{ $user->name }}</p>
                                <button wire:click="leaveChat" class="bg-red-700 text-white font-semibold text-xs mt-2 px-2 py-1 rounded shadow hover:shadow-md outline-none focus:outline-none ease-linear transition-all duration-150">
                                    <i class="fas fa-sign-out-alt"></i> @lang('teamchat/teamchat.leave_chat')
                                </button>
                            </div>
                        @else
                            <div class="mx-5 text-indigo-500">{{ $user->name }}</div>
                        @endif
                    @else
                        @if(!is_null($targetedChatOwner) && Auth::user()->id === $targetedChatOwner->id)
                            <div class="mx-5">
                                <p>{{ $user->name }}</p>
                                <!-- Todo : Remove from the chat -->
                            </div>
                        @else
                            <div class="mx-5">{{ $user->name }}</div>
                        @endif
                    @endif
                @endforeach
            </div>
            @if(!is_null($targetedChatOwner) && Auth::user()->id === $targetedChatOwner->id && ! $newMembers->isEmpty())
                <form wire:submit.prevent="addMember">
                    <div class="flex flex-wrap mx-auto">
                        <div class="w-full px-4">
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">
                                    @lang('teamchat/teamchat.manage_members.choose_user')
                                </label>
                                <select wire:model.defer="newMember" id="newMember" name="newMember" autocomplete="newMember" class="mt-1 block w-full py-3 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>@lang('teamchat/teamchat.manage_members.choose_user')</option>
                                    @foreach($newMembers as $newMember)
                                        <option value="{{ $newMember->id }}">{{ $newMember->name }}</option>
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
                        <x-jet-secondary-button class="mr-6" wire:click="$toggle('manageMembers')" wire:loading.attr="disabled">
                            @lang('organizer/properties/properties.edit_property.costs_card.add_cost.cancel')
                        </x-jet-secondary-button>
                    </div>
                </form>
            @endif
        </x-slot>
    </x-jet-dialog-modal>
</div>