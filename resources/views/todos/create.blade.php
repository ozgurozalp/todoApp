<x-layout title="Save Todos">
    <h1 class="mt-2">Add Todo</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('todos.store') }}" class="mt-3">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status_id" id="status" class="form-select">
                <option selected disabled>Pick a status</option>
                @foreach($statuses as $status)
                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="desc" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Todo</button>
    </form>
</x-layout>
