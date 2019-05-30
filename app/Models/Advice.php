<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
	protected $table = 'advices';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}