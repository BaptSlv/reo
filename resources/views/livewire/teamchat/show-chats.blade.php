<div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap mt-4">
        <div class="w-full px-4 mb-12">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white p-5 lg:p-10" style="height: 44rem">
                <div class="flex h-full antialiased text-gray-800">
                    <div class="flex flex-row w-full overflow-x-hidden">
                        <div class="flex flex-col py-6 pl-6 pr-2 w-64 bg-white flex-shrink-0">
                            <div class="flex flex-col items-center bg-indigo-100 border border-gray-200 w-full py-6 px-4 rounded-lg">
                                @if($targetedChat)
                                    <div class="text-sm font-semibold">{{ $targetedChat->name }}</div>
                                    <livewire:teamchat.manage-members :targetedChat="$targetedChat" :key="$targetedChat->id"/>
                                @else
                                    <div class="text-sm font-semibold">{{ Auth::user()->name }}</div>
                                    <div class="text-xs text-gray-500">{{ $countUserChat }} @lang('teamchat/teamchat.show_chats.chats')</div>
                                @endif
                            </div>
                            <div class="flex flex-col mt-8">
                                <div class="flex flex-row items-center justify-between text-xs">
                                    <span class="font-bold">@lang('teamchat/teamchat.my_chats')</span>
                                    <span class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full">{{ $ownedChats->count() }}</span>
                                </div>
                                <div class="flex flex-col space-y-1 mt-4 -mx-2 max-h-32 overflow-y-auto">
                                    <livewire:teamchat.create-chat/>
                                    @foreach($ownedChats as $ownedChat)
                                        @if($targetedChat && $targetedChat->id === $ownedChat->id)
                                            <div class="flex flex-row items-center bg-indigo-100 rounded-xl p-2">
                                                <div class="flex items-center justify-center h-8 w-8 bg-gray-200 rounded-full">
                                                    {{ $ownedChat->name[0] }}
                                                </div>
                                                <div class="ml-2 text-sm font-semibold">{{ $ownedChat->name }}</div>
                                                <div class="flex items-center justify-center ml-auto text-xs text-white bg-red-500 h-4 w-4 rounded leading-none">
                                                    2
                                                </div>
                                            </div>
                                        @else
                                            <button wire:click="showChat({{ $ownedChat }})" class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                                                <div class="flex items-center justify-center h-8 w-8 bg-gray-200 rounded-full">
                                                    {{ $ownedChat->name[0] }}
                                                </div>
                                                <div class="ml-2 text-sm font-semibold">{{ $ownedChat->name }}</div>
                                                <div class="flex items-center justify-center ml-auto text-xs text-white bg-red-500 h-4 w-4 rounded leading-none">
                                                    2
                                                </div>
                                            </button>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="flex flex-row items-center justify-between text-xs mt-6">
                                <span class="font-bold">@lang('teamchat/teamchat.team_chat')</span>
                            </div>
                            <div class="flex flex-col space-y-1 mt-4 -mx-2">
                                @if($targetedChat && $targetedChat->id === $defaultTeamChat->id)
                                    <div class="flex flex-row items-center bg-indigo-100 rounded-xl p-2">
                                        <div class="flex items-center justify-center h-8 w-8 bg-green-300 rounded-full">
                                            {{ $defaultTeamChat->name[0] }}
                                        </div>
                                        <div class="ml-2 text-sm font-semibold">{{ $defaultTeamChat->name }}</div>
                                    </div>
                                @else
                                    <button wire:click="showChat({{ $defaultTeamChat }})" class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                                        <div class="flex items-center justify-center h-8 w-8 bg-green-300 rounded-full">
                                            {{ $defaultTeamChat->name[0] }}
                                        </div>
                                        <div class="ml-2 text-sm font-semibold">{{ $defaultTeamChat->name }}</div>
                                    </button>
                                @endif
                            </div>

                            <div class="flex flex-col mt-8">
                                <div class="flex flex-row items-center justify-between text-xs">
                                    <span class="font-bold">@lang('teamchat/teamchat.other_chats')</span>
                                    <span class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full">{{ $otherChats->count() }}</span>
                                </div>
                                <div class="flex flex-col space-y-1 mt-4 -mx-2 max-h-32 overflow-y-auto">
                                    @foreach($otherChats as $otherChat)
                                        @if($targetedChat && $targetedChat->id === $otherChat->id)
                                            <div class="flex flex-row items-center bg-indigo-100 rounded-xl p-2 disabled:opacity-75">
                                                <div class="flex items-center justify-center h-8 w-8 bg-gray-200 rounded-full">
                                                    {{ $otherChat->name[0] }}
                                                </div>
                                                <div class="ml-2 text-sm font-semibold">{{ $otherChat->name }}</div>
                                                <div class="flex items-center justify-center ml-auto text-xs text-white bg-red-500 h-4 w-4 rounded leading-none">
                                                    2
                                                </div>
                                            </div>
                                        @else
                                            <button wire:click="showChat({{ $otherChat }})" class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                                                <div class="flex items-center justify-center h-8 w-8 bg-gray-200 rounded-full">
                                                    {{ $otherChat->name[0] }}
                                                </div>
                                                <div class="ml-2 text-sm font-semibold">{{ $otherChat->name }}</div>
                                                <div class="flex items-center justify-center ml-auto text-xs text-white bg-red-500 h-4 w-4 rounded leading-none">
                                                    2
                                                </div>
                                            </button>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @if($targetedChat)
                            <livewire:teamchat.open-chat :targetedChat="$targetedChat" :key="$targetedChat->id"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
