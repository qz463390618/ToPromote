<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    protected $table = 'url_parameter';
    public $timestamps = false;
    protected $fillable = ['parameter_val','parameter_name'];
}
