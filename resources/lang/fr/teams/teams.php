<?php

return [

    'button' => [
        'create' => 'Créer',
        'save' => 'Enregistrer',
        'saved' => 'Enregistré.',
        'add' => 'Ajouter',
        'added' => 'Ajouté..',
        'cancel' => 'Annuler',
        'leave' => 'Quitter',
        'remove' => 'Supprimer',
        'delete_team' => 'Supprimer l’équipe',
    ],
    'roles' => [
        'admin' => 'Administrateur',
        'admin_desc' => 'Les administrateurs peuvent réaliser toutes les actions.',
        'editor' => 'Editeur',
        'editor_desc' => 'Les editeurs peuvent ajouter et modifier.',
        'guest' => 'Invité',
        'guest_desc' => 'Les invités peuvent uniquement lire.',
    ],
    'create_teams' => [
        'title' => 'Détails de l’équipe',
        'description' => 'Créer une nouvelle équipe immobilière.',
        'owner' => 'Gérant l’équipe',
        'name' => 'Nom de l’équipe',
    ],
    'update_teams' => [
        'title' => 'Nom de l’équipe',
        'description' => 'Information de l’équipe.',
        'owner' => 'Gérant de l’équipe',
        'name' => 'Nom de l’équipe',
    ],
    'add_members' => [
        'title' => 'Ajouter un membre',
        'description' => 'Ajouter un nouveau membre a l’équipe afin qu’il collabore avec vous.',
        'explication' => 'Entrer l’adresse mail de la personne que vous souhaitez inviter à l’équipe.',
        'email' => 'Email',
        'role' => 'Role',
    ],
    'pending_invitations' => [
        'title' => 'Invitations en attente',
        'description' => 'Ces personnes ont été invitées par mail a rejoindre votre équipe. Ils doivent désormais acceter l’invitation reçue par mail.',
    ],
    'manage_members' => [
        'title' => 'Membre de l’équipe',
        'description' => 'Toutes ces personnes sont membres de l’équipe.',
    ],
    'manage_roles' => [
        'title' => 'Gérer le role des membres',
        'description' => 'Toutes ces personnes sont membres de l’équipe.',
    ],
    'leave_team' => [
        'title' => 'Quitter l’équipe',
        'description' => 'Êtes-vous sur de vouloir quitter cette équipe ?',
    ],
    'remove_member' => [
        'title' => 'Supprimer des membres',
        'description' => 'Êtes-vous sur de vouloir supprimer cette personne de l’équipe ?',
    ],
    'delete_team' => [
        'title' => 'Supprimer l’équipe',
        'description' => 'Supprimer définitivement l’équipe.',
        'explication' => 'Lorsque vous supprimer une équipe, toutes les données relatives à cette équipe sont également détruites. Avant de supprimer l‘équipe, pensez à récupérer les informations importantes.',
        'modal' => [
            'title' => 'Supprimer l’équipe',
            'sure' => 'Êtes-vous sur de vouloir supprimer l’équipe ? Une fois supprimer, toutes les informations liées à cette équipe seront détruites.',
        ],
    ],
];