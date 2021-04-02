<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
    	'box_id',
    	'detail',
    	'image',
    	'source',
    	'source_link',
    	'sumary',
    	'title'
    ];

    public function box()
    {
    	return $this->belongsTo(Box::class);
    }
}
