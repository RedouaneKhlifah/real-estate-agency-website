<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;

    protected $table  = 'properties';
    protected $primaryKey  = 'id';
    protected $fillable = [

        'title' ,
        'description' ,

        'type' ,
        'rooms' ,
        'price' ,
        'area' ,
     

        'address' ,
        'city' ,
        'state',
        'neighborhood' ,

        'Age' ,
        'beds' ,
        'bathRooms' ,
        
        'Features',

        'user_id',

       

    ];


      // relationships

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function PropertyImage(){
        return $this->hasMany(PropertyImage::class);
    }

    public function like(){
        return $this->hasMany(like::class);
    }

}
