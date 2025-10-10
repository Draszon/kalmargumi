<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = ['name'];

    public function wheelsService():HasMany {
        return $this->hasMany(WheelService::class, 'category_id', 'id')
            ->orderBy('order', 'asc');
    }
}
