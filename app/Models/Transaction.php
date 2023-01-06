<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model

{
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id', 'users_id', 'additional_visa',
        'transaction_total', 'transaction_status'

    ];

    protected $hidden = [

    ];

    public function details(){  // relasi dengan detail tabel
        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }
    public function travel_package(){  // relasi dengan travel package tabel
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }
     public function user(){  // relasi dengan users tabel
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}


// {

//     // use HasFactory;
// }
