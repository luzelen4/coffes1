<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['coffee_name', 'coffee_date', 'coffee_max_capacity', 'coffee_speaker_name', 'coffee_meetup_url', 'coffee_is_virtual', 'categoria_id'];

    /**
     * Relación de uno a muchos con el modelo Coffe.
     */
    public function coffees()
    {
        return $this->hasMany(Coffe::class, 'categoria_id');
    }
}

