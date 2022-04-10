<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Hospital extends Model
{
    use HasFactory;

    /** @var array */
    protected $fillable = [
        'id',
        'name',
        'address',
        'email',
        'latitude',
        'longitude',
    ];


    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return ($this->d_name == 'u_name') ?  $this->salutation . " " . $this->f_name . " " . $this->l_name : $this->company;
    }


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
                'p_id',
                'id',
                'variations'
            );
    }
}
