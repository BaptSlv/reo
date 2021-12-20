<?php

return [

    'search' => 'Chercher un bien...',
    'property_card' => [
        'purchase_price' => 'Prix d’achat :',
        'total_price' => 'Prix total :',
        'edit' => 'Editer',
    ],
    'edit_property' => [
        'title' => 'Editer le bien',
        'save' => 'Enregistrer',
        'property_information' => [
            'information' => 'Informations',
            'name' => 'Nom',
            'purchase_price' => 'Prix d’achat',
            'currency' => 'Monnaie',
            'area' => 'Surface',
            'measurement_unit' => 'Unité de mesure',
        ],
        'property_location' => [
            'location' => 'Localisation',
            'address' => 'Adresse',
            'address_sup' => 'Complément d’adresse',
            'city' => 'Ville',
            'zipcode' => 'Code postal',
            'country' => 'Pays',
        ],
        'property_image' => [
            'title' => 'Image',
            'format' => 'PNG, JPEG/JPG, GIF jusqu’à 2MB',
        ],
        'costs_card' => [
            'title' => 'Couts d’achat supplémentaires :',
            'name' => 'Nom',
            'amount' => 'Montant',
            'delete' => 'Supprimer',
            'add_cost' => [
                'title' => 'Ajouter un cout',
                'description' => 'Lier un cout supplémentaire à votre bien : ',
                'type' => 'Type',
                'choose_type' => 'Choisir un type...',
                'link' => 'Lier',
                'cancel' => 'Annuler',
            ],
            'remove_cost' => [
                'description' => 'Supprimer un cout additionnel à votre bien : ',
                'sure' => 'Etes-vous sur de vouloir supprimer ce cout ?',
                'explication' => 'Cette action va ré-évaluer le prix total d’acquision.',
                'remove' => 'Supprimer',
            ],
        ],
    ],
    'create_property' => [
        'title' => 'Ajouter un bien à mon park',
        'create' => 'Créer',
        'property_information' => [
            'information' => 'Informations',
            'name' => 'Nom',
            'purchase_price' => 'Prix d’achat',
            'currency' => 'Monnaie',
            'area' => 'Surface',
            'measurement_unit' => 'Unité de mesure',
        ],
        'property_location' => [
            'location' => 'Localisation',
            'address' => 'Adresse',
            'address_sup' => 'Complément d’adresse',
            'city' => 'Ville',
            'zipcode' => 'Code postal',
            'country' => 'Pays',
        ],
        'property_image' => [
            'title' => 'Image',
            'format' => 'PNG, JPEG/JPG, GIF jusqu’à 2MB',
        ],
    ],
    'no_property' => [
        'welcome' => 'Bienvenue dans Mon parc. Vous trouverez ici vos différents bien immobiliers créés.',
        'first_step' => 'Première étape : configurer des coûts d’achat additionels.',
        'button_first' => 'Configurer des coûts d’achat',
        'second_step' => 'Deuxième étape : ajouter votre premier bien.',
        'button_second' => 'Ajouter un bien',
    ],
];