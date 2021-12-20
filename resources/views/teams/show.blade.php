<x-app-layout>
    <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap mt-4">
            <div class="w-full px-4 mb-12">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white p-10">
                    @livewire('teams.update-team-name-form', ['team' => $team])
                    @livewire('teams.team-member-manager', ['team' => $team])
                    @if (Gate::check('delete', $team) && ! $team->personal_team)
                        <x-jet-section-border/>
                        <div class="mt-10 sm:mt-0">
                            @livewire('teams.delete-team-form', ['team' => $team])
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
