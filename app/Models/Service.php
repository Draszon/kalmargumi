<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $fillable = ['title', 'content'];

    public function wheelServices(): HasMany {
        return $this->hasMany(WheelService::class, 'service_id', 'id');
    }
}