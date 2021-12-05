<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actu extends Model
{
    protected $fillable = ['titre', 'descri', 'lien'];
    use HasFactory;
}
