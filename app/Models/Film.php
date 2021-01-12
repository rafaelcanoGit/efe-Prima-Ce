<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Film extends Model
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'film_id';

    public function lenguaje() {
        return $this->belongsTo(Lenguaje::Class);
    }

    public function films_actors() {
        return $this->hasMany(Film_Actor::Class);
    }

}
