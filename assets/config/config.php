<?php

use Hanafalah\ModuleCardIdentity\{
    Models as ModuleCardIdentityModels,
    Contracts
};

return [
    'contracts'  => [
        'card_identity'        => Contracts\CardIdentity::class,
        'module_card_identity' => Contracts\ModuleCardIdentity::class
    ],
    'database'   => [
        'models' => [
            'CardIdentity'   => ModuleCardIdentityModels\Identity\CardIdentity::class
        ]
    ]
];
