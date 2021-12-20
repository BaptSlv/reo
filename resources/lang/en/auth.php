<?php

return [

    'register' => [
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'confirm_password' => 'Confirm password',
        'already_registered' => 'Already registered ?',
        'register' => 'Register',
    ],
    'login' => [
        'email' => 'Email',
        'password' => 'Password',
        'forgot_password' => 'Forgot your password ?',
        'remember' => 'Remember me',
        'not_registered' => 'Create your account',
        'log_in' => 'Log In',
    ],
    'forgot_password' => [
        'description' => 'Forgot your password ? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.',
        'email' => 'Email',
        'link' => 'Email Password Reset Link',
        'log_in' => 'Log In',
    ],
    'reset_password' => [
        'email' => 'Email',
        'password' => 'Password',
        'confirm_password' => 'Confirm password',
        'reset' => 'Reset password',
    ],
    'confirm_password' => [
        'description' => 'This is a secure area of the application. Please confirm your password before continuing.',
        'password' => 'Password',
        'confirm' => 'Confirm',
    ],
    'double_auth' => [
        'auth_description' => 'Please confirm access to your account by entering the authentication code provided by your authenticator application.',
        'recovery_description' => 'Please confirm access to your account by entering one of your emergency recovery codes.',
        'auth_code' => 'Code',
        'recovery_code' => 'Recovery code',
        'auth_button' => 'Use an authentication code',
        'recovery_button' => 'Use a recovery code',
        'log_in' => 'Log In',
    ],
    'verify_email' => [
        'description' => 'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn’t receive the email, we will gladly send you another.',
        'new_link' => 'A new verification link has been sent to the email address you provided during registration.',
        'resend' => 'Resend verification email',
        'log_out' => 'Log Out',
    ],
    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

];
