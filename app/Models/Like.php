<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table  = 'likes';
    protected $primaryKey  = 'id';
    protected $fillable = [
        'user_id',
        'property_id'
    ];


      // relationships
    public function user(){
        $this->belongsTo(user::class);
    }
    
    public function property(){
        $this->belongsTo(property::class);
    }
}
