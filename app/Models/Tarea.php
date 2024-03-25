<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    /**Lo que se va a guardar en mi base de datos */

    protected $fillable=[
        'user_id',
        'title',
        'description',
        'priority',
        'due_date'
    ];
}
