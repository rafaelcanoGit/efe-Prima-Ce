<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Actor extends Model
{
    use HasFactory, Notifiable;
    
    protected $primaryKey = 'actor_id';
    protected $fillable = [
        'first_name',
        'last_name',
    ];

    public function films_actors() {
        return $this->hasMany(Film_Actor::Class);
    }
}
