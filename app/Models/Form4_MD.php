<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form4_MD extends Model
{
    protected $table = 'form4';
    protected $guarded = [];
    public $timestamps = false;
    public function invoice_details()
    {
        return $this->hasMany(Invoice_Items_MD::class, 'form4_id', 'id');
    }
}
