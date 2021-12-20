<x-jet-action-section>
    <x-slot name="title">
        @lang('profile/profile.delete_account.title')
    </x-slot>

    <x-slot name="description">
        @lang('profile/profile.delete_account.description')
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            @lang('profile/profile.delete_account.explication')
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                @lang('profile/profile.button.delete')
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                @lang('profile/profile.delete_account.modal.title')
            </x-slot>

            <x-slot name="content">
                @lang('profile/profile.delete_account.modal.sure')

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('profile/profile.delete_account.modal.password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    @lang('profile/profile.button.cancel')
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    @lang('profile/profile.button.delete')
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
