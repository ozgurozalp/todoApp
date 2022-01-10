<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodosRequest;
use App\Models\Status;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TodoController extends Controller
{
    public function index(): View
    {
        return view('todos.index', [
            'todos' => Todo::with('status')->latest()->paginate(3)
        ]);
    }


    public function create()
    {
        return view('todos.create', [
            'statuses' => Status::all()
        ]);
    }


    public function store(StoreTodosRequest $request)
    {
        Todo::create($request->validated());
        return redirect()->route('todos.index')->with('message', ['type' => 'success', 'text' => 'Todo is created']);
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', [
            'todo' => $todo,
            'statuses' => Status::all()
        ]);
    }


    public function toggle(Todo $todo)
    {
        $todo->isDone = !$todo->isDone;
        $todo->save();
        return back();
    }

    public function update(StoreTodosRequest $request, Todo $todo)
    {
        $todo->update($request->validated());
        return redirect()->route('todos.index')->with('message', ['type' => 'success', 'text' => 'Todo updated']);
    }


    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index')->with('message', ['type' => 'success', 'text' => 'Todo deleted']);
    }
}
