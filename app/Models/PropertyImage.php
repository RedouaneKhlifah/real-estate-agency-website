<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    use HasFactory;

    protected $table  = 'images';
    protected $primaryKey  = 'id';
    protected $fillable = [
        'image',
        'property_id'
    ];


      // relationships

    public function property(){
        return $this->belongsTo(property::class);
    }



}