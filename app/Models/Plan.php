<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
	protected $table = 'plans';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}