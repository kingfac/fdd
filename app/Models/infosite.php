<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infosite extends Model
{
    protected $fillable = ['titre', 'descri'];
    use HasFactory;
}
