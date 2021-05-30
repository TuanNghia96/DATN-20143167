<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public $timestamps = true;
    protected $table = 'tickets';

    protected $fillable = [
        'buyer_id',
        'event_id',
        'qrcode_check',
        'supplier_id',
    ];
}
