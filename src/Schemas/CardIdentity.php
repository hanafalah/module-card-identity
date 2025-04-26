<?php

namespace Hanafalah\ModuleCardIdentity\Schemas;

use Hanafalah\LaravelSupport\Supports\PackageManagement;
use Hanafalah\ModuleCardIdentity\Contracts\Schemas\CardIdentity as ContractsCardIdentity;

class CardIdentity extends PackageManagement implements ContractsCardIdentity
{
    protected string $__entity = 'CardIdentity';

    public function prepareStoreCardIdentity(){
        
    }
}
