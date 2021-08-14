@extends('layouts.base')
@section('title')
    Edit task
@endsection
@section('modalEdit')
    <form action="{{ route('edit', ['id' => $taskUniq->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" id="title" value="{{$taskUniq->title}}" class="form-control"
                   placeholder="Digite o Titulo">
        </div>
        <div class="form-group">
            <label for="Difficulty">Dificuldade</label>
            <select class="form-control" name="dificuldade" id="Difficulty">
                <option>Selecionar</option>
                <option value="easy" {{ $taskUniq->difficulty == 'easy' ? 'selected="selected"' : '' }}>Fácil</option>
                <option value="medium" {{ $taskUniq->difficulty == 'medium' ? 'selected="selected"' : '' }}>Médio
                </option>
                <option value="difficult" {{ $taskUniq->difficulty == 'difficult' ? 'selected="selected"' : '' }}>
                    Difícil
                </option>
            </select>
        </div>
        <div class="form-group">
            <label for="Importancia">Importancia</label>
            <select class="form-control" name="importancia" id="Importancia">
                <option>Selecionar</option>
                <option value="easy" {{ $taskUniq->important == 'easy' ? 'selected="selected"' : '' }}>Fácil</option>
                <option value="medium" {{ $taskUniq->important == 'medium' ? 'selected="selected"' : '' }}>Médio
                </option>
                <option value="difficult" {{ $taskUniq->important == 'difficult' ? 'selected="selected"' : '' }}>
                    Difícil
                </option>
            </select>
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary create col-md-2">Editar</button>
        </div>
    </form>
@endsection
