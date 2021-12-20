<?php

return [

    'register' => [
        'name' => 'Nom',
        'email' => 'Email',
        'password' => 'Mot de passe',
        'confirm_password' => 'Confirmer le mot de passe',
        'already_registered' => 'Déjà enregistré ?',
        'register' => 'Enregistrer',
    ],
    'login' => [
        'email' => 'Email',
        'password' => 'Mot de passe',
        'forgot_password' => 'Mot de passe oublié ?',
        'remember' => 'Se rappeler de moi',
        'not_registered' => 'Créer mon compte',
        'log_in' => 'Se connecter',
    ],
    'forgot_password' => [
        'description' => 'Mot de passe oublié ? Aucun problème. Rentrez votre email et un lien vous sera envoyé pour réinitialiser votre mot de passe.',
        'email' => 'Email',
        'link' => 'Envoyer l’email',
        'log_in' => 'Se connecter',
    ],
    'reset_password' => [
        'email' => 'Email',
        'password' => 'Mot de passe',
        'confirm_password' => 'Confirmer Mot de passe',
        'reset' => 'Réinitialiser le mot de passe',
    ],
    'confirm_password' => [
        'description' => 'Ceci est une zone sécurisé de l’application. Confirmez votre mot de passe avant de continuer.',
        'password' => 'Mot de passe',
        'confirm' => 'Confirmer',
    ],
    'double_auth' => [
        'auth_description' => 'Confirmer l’accés à votre compte en renseignant l’un des codes d’authentification généré par l’application.',
        'recovery_description' => 'Confirmer l’accés à votre compte en entrant vos codes de récupération d’urgence.',
        'auth_code' => 'Code',
        'recovery_code' => 'Code de récupération d’urgence',
        'auth_button' => 'Utiliser un code dauthentification',
        'recovery_button' => 'Utiliser un code de récupération d’urgence',
        'log_in' => 'Se connecter',
    ],
    'verify_email' => [
        'description' => 'Merci de vous être enregistré. Avant de commencer, pouvez vous vérifier votre adresse mail en cliquant sur le lien qui vous a été envoyé ? Si vous n’avez pas reçu le mail, nous pouvons vous en renvoyer un.',
        'new_link' => 'Un nouveau lien de vérification vous a été envoyé sur l’adresse mail renseignée.',
        'resend' => 'Renvoyer un email',
        'log_out' => 'Se déconnecter',
    ],
    'failed' => 'Aucun résultat pour ces identifiants.',
    'password' => 'Le mot de passe fourni est incorrect.',
    'throttle' => 'Trop d’essais de connection réalisé. Merci de réessayer dans :seconds seconds.',

];
