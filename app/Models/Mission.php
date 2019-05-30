<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
	protected $table = 'missions';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}