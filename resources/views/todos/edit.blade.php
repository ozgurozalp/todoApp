<x-layout title="Update Todos">
    <h1 class="mt-2">Update Todo</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('todos.update', ['todo' => $todo->id]) }}" class="mt-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ $todo->title }}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status_id" id="status" class="form-select">
                @foreach($statuses as $status)
                    <option @if ($status->id === $todo->status_id) selected @endif value="{{ $status->id }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="desc" rows="3">{{$todo->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Todo</button>
    </form>
</x-layout>
