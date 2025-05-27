<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ez List</title>
    @vite('resources/scss/front.scss')
</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar d-flex flex-column">
                <div class="sidebar-content">
                    <h3 class="mb-4">Settings</h3>
                    <form>
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
                    <button class="btn btn-primary">Add Item</button>
                </div>

                <div class="list-content flex-grow-1 overflow-auto p-3">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Buy groceries
                            <span class="badge bg-secondary">Today</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Read book
                            <span class="badge bg-success">Tomorrow</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Call plumber
                            <span class="badge bg-danger">Overdue</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
