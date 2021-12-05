<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partenaire extends Model
{
    protected $fillable = ['lib', 'lien'];
    use HasFactory;
}
