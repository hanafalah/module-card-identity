<?php

namespace Hanafalah\ModuleCardIdentity\Schemas;

use Hanafalah\LaravelSupport\Supports\PackageManagement;
use Hanafalah\ModuleCardIdentity\Contracts\Schemas\CardIdentity as ContractsCardIdentity;

class CardIdentity extends PackageManagement implements ContractsCardIdentity
{
    public function booting(): self
    {
        static::$__class = $this;
        static::$__model = $this->{$this->__entity . "Model"}();
        return $this;
    }

    protected array $__guard   = ['reference_id', 'reference_type'];
    protected array $__add     = ['flag', 'value'];
    protected string $__entity = 'CardIdentity';

    /**
     * Add a new API access or update the existing one if found.
     *
     * The given attributes will be merged with the existing API access.
     *
     * @param array $attributes The attributes to be added to the API access.
     *
     * @return \Illuminate\Database\Eloquent\Model The API access model.
     */
    public function addOrChange(?array $attributes = []): self
    {
        if (isset($attributes['parent_model'])) {
            $parent_model = $attributes['parent_model'];
            $attributes['reference_id'] = $parent_model->getKey();
            $attributes['reference_type'] = $parent_model->getMorphClass();
        }
        $this->updateOrCreate($attributes);
        return $this;
    }
}
