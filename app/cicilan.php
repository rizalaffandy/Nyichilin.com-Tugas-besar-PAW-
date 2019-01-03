<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cicilan extends Model
{
    protected $table = 'cicilan';
    protected $fillable = [
    	'namalaptop','nama','ktm','alamat'
    ];
}
