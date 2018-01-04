<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class UrlMessage extends Model
{
    protected $table = 'url_message';
    public $timestamps = false;
    protected $fillable = ['url','message','url_se'];
}
