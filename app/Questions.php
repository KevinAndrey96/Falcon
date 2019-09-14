<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
     // Instancio la tabla 'jugos' 
    protected $table = 'questions';
    
    // Declaro los campos que usaré de la tabla 'jugos' 
    protected $fillable = ['id','title', 'area', 'question', 'answer', 'optionA', 'optionB', 'optionC', 'optionD', 'optionE'];
}
