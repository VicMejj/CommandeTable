<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_commande';
    protected $fillable = ['ID_utilisateur', 'Date_commande', 'Total', 'Statut'];
}

