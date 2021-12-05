<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class domaine extends Model
{
    protected $fillable = ['lib', 'descri'];
    use HasFactory;
}
