<div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap mt-4">
        <div class="w-full px-4 mb-12">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white p-10">
                <div class="block w-full overflow-x-auto">
                    <x-jet-application-logo class="block h-20 w-auto"/>
                    <div class="mt-6 text-2xl">
                        @lang('store/module.welcome')
                    </div>
                    <div class="my-6 text-gray-600">
                        @lang('store/module.description')
                    </div>
                    <div class="grid lg:grid-cols-6 gap-2">
                        @foreach($modules as $module)
                            <div class="col-span-3 p-4 border border-blueGray-300">
                                <div class="grid lg:grid-cols-3 gap-6">
                                    <div class="col-span-2 text-lg text-gray-600 font-semibold">
                                        <i class="{{ $module->icon }}"></i> {{ $module->name }}
                                    </div>
                                    <div class="col-span-1">
                                        @if(Auth::user()->currentTeam->modules->contains($module))
                                            <x-jet-secondary-button wire:click="deactivate({{ $module->id }})">@lang('store/module.deactivate')</x-jet-secondary-button>
                                        @else
                                            <x-jet-button wire:click="activate({{ $module->id }})">@lang('store/module.activate')</x-jet-button>
                                        @endif
                                    </div>
                                </div>

                                <div class="lg:ml-12">
                                    <div class="mt-2 text-sm text-gray-500">
                                        @if($module->namespace === 'organizer')
                                            @lang('store/module.organizer.description')
                                        @elseif($module->namespace === 'manager')
                                            @lang('store/module.manager.description')
                                        @else
                                            @lang('store/module.simulator.description')
                                        @endif
                                    </div>
                                    <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                        <a href="/{{ $module->namespace }}" class="md:mr-44">
                                            @lang('store/module.more_info') {{ $module->name }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>