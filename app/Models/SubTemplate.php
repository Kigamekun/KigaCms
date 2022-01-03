<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTemplate extends Model
{
    protected $table = 'sub_template';
    protected $fillable = ['template_id','code','name'];
    use HasFactory;
}
