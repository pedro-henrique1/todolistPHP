<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTaskRequest;
use App\Models\TodoList;
use Illuminate\Http\RedirectResponse;

class UpdateTaskController extends Controller
{
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
}
