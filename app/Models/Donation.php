<?php

namespace App\Models;
use App\Models\Donations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Donation extends Model
{
    use HasFactory;
    protected $table = 'donations';

    /** @var array */
    protected $fillable = [
        'hospital_id',
        'donor_id',
        'receptor_id',
        'status',
        'note',
        'extraction_date',
        'transformation_date',


    ];

    public function blood(): BelongsTo
    {
        return $this->belongsTo(Blood::class);
    }

}
