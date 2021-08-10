<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Models\TodoList;
use Illuminate\Http\RedirectResponse;

class CreateTaskController extends Controller
{
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

}
