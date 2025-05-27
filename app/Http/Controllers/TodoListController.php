<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodoListController extends Controller
{
    public function index()
    {
        $lists = TodoList::with('items')->get();
        return view('todo-lists.index', compact('lists'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        TodoList::create($request->only('name'));
        return redirect()->back();
    }

    public function destroy(TodoList $todoList)
    {
        $todoList->delete();
        return redirect()->back();
    }
}
