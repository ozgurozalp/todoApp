<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>{{ $title ?? 'Todo App' }}</title>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger mt-2">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('todos.index') ? 'active' : '' }}" href="{{ route('todos.index') }}">Todo List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('todos.create') ? 'active' : '' }}" href="{{ route('todos.create') }}">Add Todo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{ $slot }}
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
