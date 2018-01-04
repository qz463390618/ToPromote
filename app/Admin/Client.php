<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    public $timestamps = false;
    protected $fillable = ['client_name','client_phone','add_time','verification','ip','url','source','keyword'];
}
