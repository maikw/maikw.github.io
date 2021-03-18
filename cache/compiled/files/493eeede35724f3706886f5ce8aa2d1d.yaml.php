<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/maik/Sites/maikw.github.io/user/plugins/flex-objects/blueprints/flex-objects/user-accounts.yaml',
    'modified' => 1616003172,
    'data' => [
        'title' => 'User Accounts (Admin)',
        'description' => 'Manage your User Accounts in the new Flex Accounts admin. This allows you to use Flex Accounts only in Admin plugin, while still using the old users in the frontend.',
        'type' => 'flex-objects',
        'extends@' => [
            'type' => 'user-accounts',
            'context' => 'blueprints://flex'
        ]
    ]
];
