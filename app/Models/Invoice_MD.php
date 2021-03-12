<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice_MD extends Model
{
    //
    protected $table = 'invoice';
    protected $guarded = [];
    public function form1()
    {
        return $this->hasOne('App\Models\Form1_MD', 'id', 'form1_id');
    }
}
