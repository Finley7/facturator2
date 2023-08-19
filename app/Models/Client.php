<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'iban',
        'address',
        'zipcode',
        'city',
        'country',
        'vat_number',
        'coc_number',
        'owner_id',
        'prefix'
    ];
}
