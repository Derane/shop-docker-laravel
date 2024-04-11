<?php

namespace App\Traits\Models;

use Illuminate\Database\Eloquent\Model;

trait HasSlug
{
    protected static function bootHasSlug(): void
    {
        parent::boot();

        static::creating(function (Model $product) {
            $product->slug = $product->slug ?? str($product->title)->slug();
        });
    }
}
