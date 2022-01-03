<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table = "template";
    protected $fillable = ['name','description','image','category'];
    use HasFactory;
}
