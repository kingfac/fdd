<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rxsocial extends Model
{
    protected $fillable = ['icon', 'lien', 'lib'];
    use HasFactory;
}
