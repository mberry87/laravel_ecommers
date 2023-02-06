<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'amount'
    ];

    public function users()
    {
        return $this->belongsTo(user::class);
    }

    public function products()
    {
        return $this->belongsTo(products::class);
    }
}
