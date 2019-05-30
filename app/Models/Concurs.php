<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concurs extends Model
{
	protected $table = 'concurses';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}

