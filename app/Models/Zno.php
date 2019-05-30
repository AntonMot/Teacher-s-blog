<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zno extends Model
{
	protected $table = 'znos';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}