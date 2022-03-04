<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blood extends Model
{
    use HasFactory;

    /** @var array */
    protected $fillable = [
        'group',

       
        
    ];
    /**
     * Get the record of Variation of the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|App\Models\ProductVariation
     */
    public function variations(): HasMany
    {
        return $this
            ->hasMany(
                ProductVariation::class,
                'm_id',
            );
    }
}
