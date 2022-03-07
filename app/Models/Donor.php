<?php

namespace App\Models;
use App\Models\Blood;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'blood_id',

    ];

    public function blood(): BelongsTo
    {
        return $this->belongsTo(Blood::class);
    }

}
