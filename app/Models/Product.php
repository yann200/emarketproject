<?php

namespace App\Models;
use App\Models\Command;
use App\Models\Interest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function commands(){
        return $this->hasMany(Command::class);
    }

     public function interests(){
        return $this->hasMany(Interest::class);
    }
}
