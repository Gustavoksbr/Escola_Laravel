<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor_turma extends Model
{
    use HasFactory;
    protected $fillable = ['id_professor','id_turma'];
}

