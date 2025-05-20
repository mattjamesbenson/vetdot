<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ez List</title>

    @vite('resources/scss/front.scss')
</head>

<body>
    <div class="flex-row">
        <div class="row">
            <div class="col-md-3 sidebar">
                <div class="sidebar-content">
                    <h3>Settings</h3>
                </div>
            </div>

            <div class="col-md-9 list">
                <div class="list-content">
                    <h1>My List</h1>

                    <p>Row</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
