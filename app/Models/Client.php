<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = "Client";
    public function Pets(){
        return $this->belongsTo(Pet::class);
    }
    public function User(){
        return $this->hasOne(Pet::class);
    }
}
