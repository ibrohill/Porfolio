<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',       // Ajoutez ce champ
        'description', // Ajoutez ce champ
        'image',      // Ajoutez ce champ
    ];
}
