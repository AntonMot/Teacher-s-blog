<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}