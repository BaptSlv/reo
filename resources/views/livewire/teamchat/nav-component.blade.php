<section>
    @if(Route::is('teamchat') || Route::is('teamchat.*'))
        <hr class="my-4 md:min-w-full"/>
        <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
            TeamChat
        </h6>
        <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
            <li class="items-center">
                <x-jet-responsive-nav-link href="{{ route('teamchat') }}" :active="request()->routeIs('teamchat')"><i class="fas fa-city mr-2"></i> @lang('nav.organizer.my_park')</x-jet-responsive-nav-link>
            </li>
        </ul>
    @endif
</section>