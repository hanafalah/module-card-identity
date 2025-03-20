<?php

namespace Hanafalah\ModuleCardIdentity\Models\Identity;

use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\LaravelSupport\Models\BaseModel;

class CardIdentity extends BaseModel
{
    use SoftDeletes;

    protected $list = ['id', 'reference_type', 'reference_id', 'flag', 'value'];
}
