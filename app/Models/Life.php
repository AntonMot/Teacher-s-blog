<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Life extends Model
{
	protected $table = 'lifes';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}