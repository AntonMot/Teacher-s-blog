<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Olympist extends Model
{
	protected $table = 'olympists';
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}