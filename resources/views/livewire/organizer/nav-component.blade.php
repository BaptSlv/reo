<section>
    @if(Route::is('organizer') || Route::is('organizer.*'))
        <hr class="my-4 md:min-w-full"/>
        <h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
            The Organizer
        </h6>
        <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
            <li class="items-center">
                <x-jet-responsive-nav-link href="{{ route('organizer') }}" :active="request()->routeIs('organizer') || request()->routeIs('organizer.edit-property')"><i class="fas fa-city mr-2"></i> @lang('nav.organizer.my_park')</x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('organizer.configure') }}" :active="request()->routeIs('organizer.configure')"><i class="fas fa-cog mr-2"></i> @lang('nav.organizer.configure')</x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('organizer.add-property') }}" :active="request()->routeIs('organizer.add-property')"><i class="fas fa-plus-circle mr-2"></i> @lang('nav.organizer.add_property')</x-jet-responsive-nav-link>
            </li>
        </ul>
    @endif
</section>