<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'status',
        'date',
        'expires',
        'prefix',
        'filename',
        'total',
        'client_id',
        'owner_id'
    ];
}
