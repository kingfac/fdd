<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compte extends Model
{
    protected $fillable = ['nom', 'numero'];
    use HasFactory;
}
