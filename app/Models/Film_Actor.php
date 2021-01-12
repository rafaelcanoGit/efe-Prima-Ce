<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film_Actor extends Model
{
    protected $fillable = [
        'actor_id',
        'film_id',
    ];
    public function film() {
        return $this->belongsTo(Film::Class);
    }

    public function actor() {
        return $this->belongsTo(Actor::Class);
    }
}
