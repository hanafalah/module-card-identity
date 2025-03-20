<?php

namespace Zahzah\ModuleCardIdentity\Models\Identity;

use Illuminate\Database\Eloquent\SoftDeletes;
use Zahzah\LaravelSupport\Models\BaseModel;

class CardIdentity extends BaseModel{
    use SoftDeletes;

    protected $list = ['id','reference_type','reference_id','flag','value'];
}