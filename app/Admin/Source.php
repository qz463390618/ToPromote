<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $table = 'client_source';
    public $timestamps = false;
    protected $fillable = ['client_id','search_url'];
}
