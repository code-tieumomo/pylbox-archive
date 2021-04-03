<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Util extends Model
{
    use HasFactory;

    protected $table = 'utilities';

    protected $fillable = [
    	'name',
    	'value'
    ];
}
