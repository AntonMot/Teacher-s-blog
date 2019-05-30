<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = 'events';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}