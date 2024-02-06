<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayMethod extends Model
{
    protected $table = 'paymethod';
     protected $fillable = [
       'titulo'
     ];

    protected $primarykey = 'id';
}
