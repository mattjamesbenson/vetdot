@extends('layouts.app')

@section('content')

<div class="container-fluid h-100">
    <div class="row h-100">
        <!-- Sidebar -->
        <div class="col-md-3 sidebar d-flex flex-column">
            <div class="sidebar-content">
                <h3 class="mb-4">Settings</h3>
                <form>
                    <meta name="csrf-token" content="{{ csrf_token() }}">

                    <div class="mb-3">
                        <label class="form-label">Sort By</label>
                        <select class="form-select">
                            <option value="date">Date</option>
                            <option value="priority">Priority</option>
                            <option value="name">Name</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Filter</label>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>

        <!-- List Area -->
        <div class="col-md-9 list d-flex flex-column">
            <div class="list-header d-flex justify-content-between align-items-center p-3 border-bottom">
                <h1 class="m-0">My List</h1>
                <button id="addItemBtn" class="btn btn-primary">Add Item</button>
            </div>

            <div class="list-content flex-grow-1 overflow-auto p-3">
                <ul class="list-group">
                    @foreach($items as $item)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span contenteditable="true" class="editable" data-id="{{ $item->id }}">
                                {{ $item->title }}
                            </span>
                            <button class="btn btn-sm btn-outline-danger delete-btn"
                                data-id="{{ $item->id }}">✕</button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addItemModalLabel">Add New Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="itemTitle" class="form-label">Item Title</label>
                    <input type="text" class="form-control" id="itemTitle" placeholder="Enter item title">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" id="saveItemBtn" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
