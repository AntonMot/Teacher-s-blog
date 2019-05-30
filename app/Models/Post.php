<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	// Указываем поля для записи в таблицу
    protected $fillable = ['title', 'content'];
}
