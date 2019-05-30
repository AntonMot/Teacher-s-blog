<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Right extends Model
{
	protected $table = 'rights';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}