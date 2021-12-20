<?php

return [

    'my_account' => 'My account',
    'profile' => [
        'profile_information' => 'Profile Information',
        'update_profile' => 'Update your account’s profile information and email address.',
        'name' => 'Name',
        'email' => 'Email',
    ],
    'button' => [
        'save' => 'Save',
        'saved' => 'Saved.',
        'enable' => 'Utiliser',
        'disable' => 'Disable',
        'regenerate_codes' => 'Regenerate Recovery Codes',
        'show_codes' => 'Show Recovery Codes',
        'log_out' => 'Log Out Other Browser Sessions',
        'done' => 'Done.',
        'cancel' => 'Cancel',
        'delete' => 'Delete Account',
    ],
    'teams' => [
        'my_teams' => 'My teams :',
        'admin' => 'Administrator',
        'editor' => 'Editor',
        'guest' => 'Guest',
        'owner' => 'Owner',
    ],
    'password' => [
        'password_information' => 'Update Password',
        'update_password' => 'Ensure your account is using a long, random password to stay secure.',
        'current_password' => 'Current Password',
        'new_password' => 'New Password',
        'confirm_password' => 'Confirm Password',
    ],
    'two_factor_auth' => [
        'title' => 'Two Factor Authentication',
        'description' => 'Add additional security to your account using two factor authentication.',
        'enable' => 'You have enabled two factor authentication.',
        'not_enable' => 'You have not enabled two factor authentication.',
        'explication' => 'When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone’s Google Authenticator application.',
        'used' => 'Two factor authentication is now enabled. Scan the following QR code using your phone’s authenticator application.',
        'store_codes' => 'Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.',
    ],
    'browser_sessions' => [
        'title' => 'Browser Sessions',
        'description' => 'Manage and log out your active sessions on other browsers and devices.',
        'explication' => 'If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.',
        'this_device' => 'This device',
        'last_active' => 'Last active',
        'modal' => [
            'title' => 'Log Out Other Browser Sessions',
            'enter_password' => 'Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.',
            'password' => 'Password',
        ]
    ],
    'delete_account' => [
        'title' => 'Delete Account',
        'description' => 'Permanently delete your account.',
        'explication' => 'Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.',
        'modal' => [
            'title' => 'Delete Account',
            'sure' => 'Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.',
            'password' => 'Password',
        ]
    ],

];