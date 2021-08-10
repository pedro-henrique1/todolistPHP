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
            @if ($taskUniq->difficulty == 'easy'|| $taskUniq->difficulty == 'medium' || $taskUniq->difficulty ==
            'difficult')
            <option value="easy">Fácil</option>
            <option value="medium">Médio</option>
            <option value="difficult">Difícil</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="Importancia">Importancia</label>
        <select class="form-control" name="importancia" id="Importancia">
            <option>Selecionar</option>
            <option value="easy">Fácil</option>
            <option value="medium">Médio</option>
            <option value="difficult">Difícil</option>
        </select>
    </div>
    <div class="">
        <button type="submit" class="btn btn-primary create col-md-2">Editar</button>
    </div>
</form>
{{--    <div class="modal" style="display: block" tabindex="-1">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title">Adicionar Tasklist</h5>--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 8%;cursor:pointer" class="  closeModal"--}}
{{--                         className="h-6 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12"/>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--
        {{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
