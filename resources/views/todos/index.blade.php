<x-layout title="Todo List">
    <h1 class="mt-2">Todo List</h1>
    @if (session('message'))
        <div class="alert alert-{{session('message')['type']}}">
            {{ session('message')['text'] }}
        </div>
    @endif
    <ul class="list-group mt-3 mb-3">
        @forelse ($todos as $todo)
            <li class="list-group-item">
                <div>
                    {{ $todo->title }}
                    <p class="border p-2 border-1">
                        {{ $todo->description }}
                    </p>
                    <div class="d-flex justify-content-between">
                        <div>
                            <span class="badge bg-secondary"> {{ $todo->status->name }}</span>
                        </div>
                        <div class="d-flex">
                            <form class="me-1" method="post" action="{{ route('todo.toggle', ['todo' => $todo->id]) }}">
                                @csrf
                                <button type="submit" name="update" class="btn @if ($todo->isDone) btn-outline-dark @else  btn-outline-success @endif btn-sm">@if ($todo->isDone) uncheck @else Mark as done @endif</button>
                            </form>
                            <a type="submit" href="{{ route('todos.edit', ['todo' => $todo->id]) }}" class="btn btn-outline-warning btn-sm me-1">Update</a>
                            <form method="post" action="{{ route('todos.destroy', ['todo' => $todo->id]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" name="delete" class="btn btn-outline-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>

                </div>
            </li>
        @empty
            <a href="{{ route('todos.create') }}" class="btn btn-outline-success">No todo is available Click to add</a>
        @endforelse
    </ul>
    {{ $todos->links() }}
</x-layout>
