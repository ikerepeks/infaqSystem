<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount','code','vendor_id'
    ];

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }
}
