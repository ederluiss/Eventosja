@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('eventos.update', ['evento' => $evento->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Descrição</label>
                    <input class="form-control" id="descricao" name="descricao" value="{{ $evento->descricao }}" />
                </div>
                <div class="form-group">
                    <label for="name">Data</label>
                    <input class="form-control" id="data" name="data" value="{{ $evento->data_evento }}" />
                </div>
                <button style="display: inline;" type="submit" class="btn btn-sm btn-success">Atualizar</button>
            </form>
        </div>
        <div class="col-md-12">
            <a style="display: inline;" href="{{ route('eventos.index') }}" class="mr-3 btn btn-sm btn-secondary">Voltar</a>
            <form style="display: inline-block;" action="{{ route('eventos.destroy', ['evento' => $evento->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="mr-3 btn btn-sm btn-danger">deletar</button>
            </form>
        </div>
    </div>
</div>
@endsection