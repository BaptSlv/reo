<div class="flex flex-col flex-auto h-full p-6">
    <div class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4">
        <div class="flex flex-col h-full overflow-x-auto mb-4">
            <div class="h-full" style="overflow:auto; display:flex; flex-direction:column-reverse">
                <div class="grid grid-cols-12 gap-y-2">
                    @foreach($messages as $message)
                        @if($message->user->id === Auth::user()->id)
                            <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                <div class="flex flex-row items-center">
                                    <div class="flex items-center justify-center h-10 w-10 rounded-full bg-green-300 flex-shrink-0">
                                        {{ $message->user->name[0] }}
                                    </div>
                                    <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                        <div>{{ $message->message }}</div>
                                    </div>
                                </div>
                                <div class="text-xs text-gray-500 ml-2 mt-2">Sent by {{ $message->user->name }} - {{ $message->created_at }}</div>
                            </div>
                        @else
                            <div class="col-start-6 col-end-13 p-3 rounded-lg">
                                <div class="flex items-center justify-start flex-row-reverse">
                                    <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                        {{ $message->user->name[0] }}
                                    </div>
                                    <div class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                                        <div>{{ $message->message }}</div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-start flex-row-reverse text-xs text-gray-500 md-2 mt-2">Sent by {{ $message->user->name }} - {{ $message->created_at }}</div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <livewire:teamchat.sent-chat-message :targetedChat="$targetedChat" :key="$targetedChat->id"/>
    </div>
</div>