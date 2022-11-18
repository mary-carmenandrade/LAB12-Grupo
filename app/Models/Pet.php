<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    public function Clients(){
        return $this->hasMany(Client::class);
    }
    public function Services(){
        return $this->hasMany(Service::class);
    }
}
