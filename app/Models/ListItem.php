<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListItem extends Model
{
    use HasFactory;

    protected $fillable = ['todo_list_id', 'title', 'completed'];

    public function todoList()
    {
        return $this->belongsTo(TodoList::class);
    }
}
