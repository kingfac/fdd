<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nous extends Model
{
    protected $fillable = ['titre', 'sous', 'contenu'];
    use HasFactory;
}
