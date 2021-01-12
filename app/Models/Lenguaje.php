<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Lenguaje extends Model
{
    use HasFactory, Notifiable;
    

public function films () {
    return $this->hasMany(Film::Class);
}

}
