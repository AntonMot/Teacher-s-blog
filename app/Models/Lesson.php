<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
	protected $table = 'lessons';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}