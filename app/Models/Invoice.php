<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Invoice extends Model
{
    use HasFactory;

    /** @var array */
    protected $fillable = [
        'customer_id',
        'invoice',
        'order_num',
        'invoice_date',
        'terms',
        'due_date',

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
                'p_id',
                'id',
                'variations'
            );
    }

    /**
     * The customer that belong to the invoice.
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
