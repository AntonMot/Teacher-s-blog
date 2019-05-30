<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
	protected $table = 'trips';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}