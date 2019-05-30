<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Olympprav extends Model
{
	protected $table = 'olymppravs';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}