<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\TodoList;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
    public function view()
    {
        $list = TodoList::all();
        return view('home', compact('list'));
    }

    public function store(CreateTaskRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        TodoList::create([
            'title' => $validated['title'],
            'difficulty' => $validated['dificuldade'],
            'important' => $validated['importancia'],
            'status' => TodoList::STATUS_NOCHECKED,
        ]);

        return redirect()->route('home');
    }

    public function show_edit($id)
    {
        $taskUniq = TodoList::find($id);
        return view('edit', compact('taskUniq'));
    }

    public function edit(UpdateTaskRequest $request, $id): RedirectResponse
    {
        $validated = $request->validated();
        $task = TodoList::find($id);
        $task->update([
            'title' => $validated['title'],
            'difficulty' => $validated['dificuldade'],
            'important' => $validated['importancia'],
            'status' => TodoList::STATUS_NOCHECKED,
        ]);

        return redirect()->route('home');
    }

    public function deletar($id): RedirectResponse
    {
        TodoList::destroy($id);
        return redirect()->route('home');
    }

    public function updated($id): RedirectResponse
    {
        $task = TodoList::find($id);

        if ($task->status  == 'checked') {
            $task->update([
                'status' => TodoList::STATUS_NOCHECKED
            ]);
        } else {
            $task->update([
                'status' => TodoList::STATUS_CHECKED
            ]);
        }
        return redirect()->route('home');
    }
}
