@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <form action="{{ route('eventos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="evento">Evento:</label>
                <input type="text" class="form-control" id="descricao" name="descricao">
            </div>
            <div class="form-group">
                <label for="data">Data do Evento:</label>
                <input type="date" class="form-control" id="data_evento" name="data_evento">
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
        </div>
    </div>
</div>
@endsection
