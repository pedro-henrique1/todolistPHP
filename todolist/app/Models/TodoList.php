<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    public const STATUS_NOCHECKED = 'unchecked';
    public const STATUS_CHECKED = 'checked';
    protected $table = "todo_lists";

     protected $guarded = ['id', 'created_at', 'updated_at'];
}
