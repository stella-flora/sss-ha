<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'year',
        'salesperson_email',
        'manufacturer_id',
    ];

    
    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class);
    }


}
