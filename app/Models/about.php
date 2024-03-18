<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
    protected $table = "aboute";
    protected $fillable = [
    'id',
    'text',
    'image',
    'title_privileges',
    'contant_privileges',
    'title_ourwork',
    'contant_ourwork'
    ];
    
}
