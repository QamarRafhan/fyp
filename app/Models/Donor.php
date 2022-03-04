<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Donor extends Model
{
    use HasFactory;
    protected $table = 'donors';

    /** @var array */
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'address',
        'username',
        'password',

    ];
    /**
     * Get the record of Variation of the product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|App\Models\DonorVariation
     */
    public function variations(): HasMany
    {
        return $this
            ->hasMany(
                DonorVariation::class,
                'p_id',
                'id',
                'variations'
            );
    }

    /**
     * The headrs that belong to the product.
     */
    public function headers(): BelongsToMany
    {
        return $this->belongsToMany(Header::class);
    }
    /**
     * The linings that belong to the product.
     */
    public function linings(): BelongsToMany
    {
        return $this->belongsToMany(Lining::class);
    }
}
