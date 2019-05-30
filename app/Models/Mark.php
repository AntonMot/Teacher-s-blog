<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
	protected $table = 'marks';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}