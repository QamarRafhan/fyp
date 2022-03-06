<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Receptor extends Model
{
    use HasFactory;
    protected $table = 'receptors';

    /** @var array */
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'address',
        'username',
        'password',

    ];

}
