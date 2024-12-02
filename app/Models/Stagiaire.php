<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','ecole','filiere','ville','phone','date_de_début','date_de_fin','Demande_Stage','CV'];
}
