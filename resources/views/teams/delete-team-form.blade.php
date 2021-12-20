<x-jet-action-section>
    <x-slot name="title">
        @lang('teams/teams.delete_team.title')
    </x-slot>

    <x-slot name="description">
        @lang('teams/teams.delete_team.description')
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            @lang('teams/teams.delete_team.explication')
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                @lang('teams/teams.button.delete_team')
            </x-jet-danger-button>
        </div>

        <!-- Delete Team Confirmation Modal -->
        <x-jet-confirmation-modal wire:model="confirmingTeamDeletion">
            <x-slot name="title">
                @lang('teams/teams.delete_team.modal.title')
            </x-slot>

            <x-slot name="content">
                @lang('teams/teams.delete_team.modal.sure')
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                    @lang('teams/teams.button.cancel')
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteTeam" wire:loading.attr="disabled">
                    @lang('teams/teams.button.delete_team')
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </x-slot>
</x-jet-action-section>
