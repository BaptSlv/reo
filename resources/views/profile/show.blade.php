<x-app-layout>
    <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-8/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-xl font-bold">
                                <i class="fas fa-id-card mr-2"></i> @lang('profile/profile.my_account')
                            </h6>
                        </div>
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10">
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                            @livewire('profile.update-profile-information-form')

                            <x-jet-section-border/>
                        @endif
                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.update-password-form')
                            </div>

                            <x-jet-section-border/>
                        @endif
                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.two-factor-authentication-form')
                            </div>
                            <x-jet-section-border/>
                        @endif
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>
                        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                            <x-jet-section-border/>
                            <div class="mt-10 sm:mt-0">
                                @livewire('profile.delete-user-form')
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-4/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
                    <div class="px-6">
                        <div class="text-center mt-12">
                            <h3 class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                                <i class="fas fa-user-tie mr-2"></i> {{ Auth::user()->name }}
                            </h3>
                            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                                <i class="fas fa-paper-plane mr-2 text-lg text-blueGray-400"></i>
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                        <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                            <h3 class="text-xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                                @lang('profile/profile.teams.my_teams')
                            </h3>
                            @foreach(Auth::user()->ownedTeams as $userTeam)
                                <div class="text-blueGray-600">
                                    <i class="fas fa-user-cog mr-2"></i> {{ $userTeam->name }} - @lang('profile/profile.teams.owner')
                                </div>
                            @endforeach
                            @foreach(Auth::user()->teams as $team)
                                <div class="text-blueGray-600">
                                    @if(Auth::user()->teamRole($team)->key === 'admin')
                                        <i class="fas fa-user-shield mr-2"></i>
                                        {{ $team->name }} - @lang('profile/profile.teams.admin')
                                    @elseif(Auth::user()->teamRole($team)->key === 'editor')
                                        <i class="fas fa-user-edit mr-2 text-lg"></i>
                                        {{ $team->name }} - @lang('profile/profile.teams.editor')
                                    @else
                                        <i class="far fa-eye mr-2 text-lg"></i>
                                        {{ $team->name }} - @lang('profile/profile.teams.guest')
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>