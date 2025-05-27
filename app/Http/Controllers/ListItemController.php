<?php

use App\Models\TodoList;
use App\Models\ListItem;
use Illuminate\Http\Request;

class ListItemController extends Controller
{
    public function store(Request $request, TodoList $todoList)
    {
        $request->validate(['title' => 'required']);
        $todoList->items()->create($request->only('title'));
        return response()->json(['success' => true]);
    }

    public function update(Request $request, TodoList $todoList, ListItem $item)
    {
        $item->update($request->only('title', 'completed'));
        return response()->json(['success' => true]);
    }

    public function destroy(TodoList $todoList, ListItem $item)
    {
        $item->delete();
        return response()->json(['success' => true]);
    }
}
