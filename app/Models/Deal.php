<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
	protected $table = 'deals';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}