<div>
    <nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
        <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
            <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
                <i class="fas fa-bars"></i>
            </button>
            <a class="hidden md:block pb-2 mr-0 inline-block whitespace-nowrap text-sm p-4 px-0" href="{{ route('welcome') }}">
                <img src="{{ asset('images/logo_text.png') }}" alt="logo">
            </a>
            <!-- Notification -->
            <!--<ul class="md:hidden items-center flex flex-wrap list-none">
                <li class="inline-block relative">
                    <a class="text-blueGray-500 block py-1 px-3" href="#pablo" onclick="openDropdown(event,'notification-dropdown')"><i class="fas fa-bell"></i></a>
                    <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="notification-dropdown">
                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a>
                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a>
                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                        <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                        <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
                    </div>
                </li>
            </ul>-->
            <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
                <div class="md:min-w-full md:hidden block">
                    <div class="flex flex-wrap">
                        <div class="w-6/12">
                            <a class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('welcome') }}">
                                <img src="{{ asset('images/text_logo.png') }}" alt="logo">
                            </a>
                        </div>
                        <div class="w-6/12 flex justify-end">
                            <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <hr class="mb-4 md:min-w-full"/>
                <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                    @lang('nav.teams.title')
                </h6>
                <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                    <li class="items-center">
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="ml-1 mb-5 relative">
                                <x-jet-dropdown align="right" width="60">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-6 py-2 border border-indigo-300 text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                                {{ Auth::user()->currentTeam->name }}
                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>
                                    <x-slot name="content">
                                        <div class="w-48">
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                @lang('nav.teams.switch')
                                            </div>
                                            @foreach (Auth::user()->allTeams() as $team)
                                                <x-jet-switchable-team :team="$team"/>
                                            @endforeach
                                        </div>
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>
                            <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show', Auth::user()->currentTeam->id)">
                                <i class="fas fa-users-cog mr-2"></i> @lang('nav.teams.settings')
                            </x-jet-responsive-nav-link>
                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                    <i class="fas fa-users mr-2"></i> @lang('nav.teams.create')
                                </x-jet-responsive-nav-link>
                            @endcan
                        @endif
                    </li>
                </ul>
                <hr class="my-4 md:min-w-full"/>
                <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                    @lang('nav.admin.title')
                </h6>
                <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                    <li class="items-center">
                        <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            <i class="fas fa-chart-line mr-2"></i> @lang('nav.admin.dashboard')
                        </x-jet-responsive-nav-link>
                    </li>
                    @if(Auth::user()->ownedTeams->contains(Auth::user()->currentTeam))
                        <li class="items-center" >
                            <x-jet-responsive-nav-link href="{{ route('store') }}" :active="request()->routeIs('store')">
                                <i class="fas fa-toolbox mr-2"></i> @lang('nav.admin.store')
                            </x-jet-responsive-nav-link>
                        </li>
                    @endif
                    <li class="items-center">
                        <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                            <i class="fas fa-user-tie mr-2"></i> {{ Auth::user()->name }}
                        </x-jet-responsive-nav-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="fas fa-sign-out-alt mr-2"></i> @lang('nav.admin.log_out')
                            </x-jet-responsive-nav-link>
                        </form>
                    </li>
                </ul>
                @if(! Auth::user()->currentTeam->modules->isEmpty())
                    <hr class="my-4 md:min-w-full"/>
                    <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
                        Modules
                    </h6>
                    <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
                        @foreach(Auth::user()->currentTeam->modules as $module)
                            <li class="items-center">
                                <x-jet-responsive-nav-link href="{{ route($module->namespace) }}" :active="request()->routeIs($module->namespace.'*')">
                                    <i class="{{ $module->icon }} mr-2"></i> {{ $module->name }}
                                </x-jet-responsive-nav-link>
                            </li>
                        @endforeach
                    </ul>
                    <livewire:organizer.nav-component/>
                @endif
            </div>
        </div>
    </nav>
</div>