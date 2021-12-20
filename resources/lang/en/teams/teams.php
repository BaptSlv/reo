<?php

return [

    'button' => [
      'create' => 'Create',
      'save' => 'Save',
      'saved' => 'Saved.',
      'add' => 'Add',
      'added' => 'Added.',
      'cancel' => 'Cancel',
      'leave' => 'Leave',
      'remove' => 'Remove',
      'delete_team' => 'Delete Team',
    ],
    'roles' => [
        'admin' => 'Administrator',
        'admin_desc' => 'Administrator users can perform any action.',
        'editor' => 'Editor',
        'editor_desc' => 'Editor users have the ability to read, create, and update.',
        'guest' => 'Guest',
        'guest_desc' => 'Guest users have the ability to read.',
    ],
    'create_teams' => [
        'title' => 'Team Details',
        'description' => 'Create a new Real Estate team.',
        'owner' => 'Team Owner',
        'name' => 'Team Name',
    ],
    'update_teams' => [
        'title' => 'Team Name',
        'description' => 'The team’s name and owner information.',
        'owner' => 'Team Owner',
        'name' => 'Team Name',
    ],
    'add_members' => [
        'title' => 'Add Team Member',
        'description' => 'Add a new team member to your team, allowing them to collaborate with you.',
        'explication' => 'Please provide the email address of the person you would like to add to this team.',
        'email' => 'Email',
        'role' => 'Role',
    ],
    'pending_invitations' => [
        'title' => 'Pending Team Invitations',
        'description' => 'These people have been invited to your team and have been sent an invitation email. They may join the team by accepting the email invitation.',
    ],
    'manage_members' => [
        'title' => 'Team Members',
        'description' => 'All of the people that are part of this team.',
    ],
    'manage_roles' => [
        'title' => 'Manage Role',
    ],
    'leave_team' => [
        'title' => 'Leave Team',
        'description' => 'Are you sure you would like to leave this team ?',
    ],
    'remove_member' => [
        'title' => 'Remove Team Member',
        'description' => 'Are you sure you would like to remove this person from the team ?',
    ],
    'delete_team' => [
        'title' => 'Delete Team',
        'description' => 'Permanently delete this team.',
        'explication' => 'Once a team is deleted, all of its resources and data will be permanently deleted. Before deleting this team, please download any data or information regarding this team that you wish to retain.',
        'modal' => [
            'title' => 'Delete Team',
            'sure' => 'Are you sure you want to delete this team ? Once a team is deleted, all of its resources and data will be permanently deleted.',
        ],
    ],
];