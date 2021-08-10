<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\RedirectResponse;

class DeleteTaskController extends Controller
{
    public function deletar($id): RedirectResponse
    {
        TodoList::destroy($id);
        return redirect()->route('home');
    }
}
