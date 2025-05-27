@extends('layouts.app')

@section('content')
<div class="row h-100">
    <div class="col-md-3 sidebar p-3 bg-light">
        <h3>Todo Lists</h3>

        <form method="POST" action="{{ route('todo-lists.store') }}">
            @csrf
            <div class="input-group mb-3">
                <input name="name" class="form-control" placeholder="New list name">
                <button class="btn btn-primary">Add</button>
            </div>
        </form>

        <ul class="list-group">
            @foreach($lists as $list)
                <li class="list-group-item d-flex justify-content-between">
                    {{ $list->name }}
                    <form method="POST" action="{{ route('todo-lists.destroy', $list->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">&times;</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="col-md-9 list p-4">
        <h2>List Items</h2>
        <!-- You can render items for the selected list here -->
    </div>
</div>
@endsection
