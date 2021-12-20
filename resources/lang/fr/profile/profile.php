<?php

return [

    'my_account' => 'Mon compte',
    'profile' => [
        'profile_information' => 'Informations utilisateur',
        'update_profile' => 'Modifier votre nom d’utilisateur et votre adresse mail.',
        'name' => 'Nom',
        'email' => 'Email',
    ],
    'button' => [
        'save' => 'Modifier',
        'saved' => 'Enregistré.',
        'enable' => 'Activer',
        'disable' => 'Désactiver',
        'regenerate_codes' => 'Regénérer les codes',
        'show_codes' => 'Afficher les codes',
        'log_out' => 'Se déconnecter des sessions',
        'done' => 'Fait.',
        'cancel' => 'Annuler',
        'delete' => 'Supprimer le compte',
    ],
    'teams' => [
        'my_teams' => 'Mes équipes :',
        'admin' => 'Administrateur',
        'editor' => 'Editeur',
        'guest' => 'Invité',
        'owner' => 'Gérant',
    ],
    'password' => [
        'password_information' => 'Modifier le mot de passe',
        'update_password' => 'Utiliser un mot de passe long et complexe pour protéger votre compte.',
        'current_password' => 'Mot de passe actuel',
        'new_password' => 'Nouveau mot de passe',
        'confirm_password' => 'Confirmer le mot de passe',
    ],
    'two_factor_auth' => [
        'title' => 'Authentification en deux facteurs',
        'description' => 'Pour sécuriser encore plus votre compte, activer l’authentification en deux facteurs.',
        'enable' => 'Vous utiliser la double authentification.',
        'not_enable' => 'Vous n’utiliser pas la double authentification.',
        'explication' => 'Lorsque vous utiliser la double authentification, un token sécurisé vous sera attribué. Vous pouvez retrouver ce token sur votre application mobile Google Authentificator.',
        'used' => 'La double authentification est maintenant activée. Scannez le QR code grace à votre téléphone.',
        'store_codes' => 'Enregistrez ces codes dans un endroit sécurisé. Ils vous seront utile pour retrouver l’accés à votre compte.',
    ],
    'browser_sessions' => [
        'title' => 'Sesssions navigateurs',
        'description' => 'Gérez et déconnectez vos sessions d’utilisation sur les autres navigateurs.',
        'explication' => 'Si nécessaire, vous pouvez déconnecter vos sessions ouvertes sur d’autres appareils. Si vous pensez que la sécurité de votre compte est compromise, vous devriez également modifier votre mot de passe.',
        'this_device' => 'Cet appareil',
        'last_active' => 'Dernier actif',
        'modal' => [
            'title' => 'Se déconnecter de cette session',
            'enter_password' => 'Confirmer votre mot de passe pour vous déconnecter des sessions.',
            'password' => 'Mot de passe',
        ]
    ],
    'delete_account' => [
        'title' => 'Supprimer le compte',
        'description' => 'Supprimer définitivement le compte.',
        'explication' => 'Une fois le compte supprimer, toutes les ressources et informations liés seront détruites. Avant de supprimer votre compte, nous vous conseillons de sauvegarder les données importantes.',
        'modal' => [
            'title' => 'Supprimer le compte',
            'sure' => 'Êtes-vous sur de vouloir supprimer le compte utilisateur ? Toutes les données seront détruites. Merci de renseigner votre mot de passe pour supprimer le compte.',
            'password' => 'Mot de passe',
        ]
    ],

];