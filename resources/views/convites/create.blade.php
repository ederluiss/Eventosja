@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h2>Inserir Convidado no Evento</h2>
        <form action="{{ route('convites.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome do Convidado:</label>
                <select class="form-control" id="id_convidado" name="id_convidado">
                    <option value="">Por favor selecione</option>
                        @foreach($convidados as $convidado)
                        <option value="{{$convidado->id}}">
                        {{$convidado->nome}}</option>
                        @endforeach;
                </select>
            </div>
            <div class="form-group">
                <label for="evento">Evento</label>
                <input type="text" class="form-control" id="id_evento" name="id_evento" value="{{$evento}}" readonly>
            </div>
            
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
        </div>
    </div>
</div>
@endsection

