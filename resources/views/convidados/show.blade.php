@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="mb-5">Lista de Convidados do Evento {{$evento}}<a href="{{ route('convites.create', ['evento' => $evento]) }}" class="btn btn-sm btn-primary">Novo Convidado</a></h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($convidados as $convidado)
                    <tr>
                        <th scope="row">{{ $convidado->id }}</th>
                        <td>{{ $convidado->nome }}</td>
                        <td>{{ $convidado->email }}</td>
                        <td>
                            <form style="display: inline;" action="{{ route('convidados.destroy', ['convidado' => $convidado->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <a href="{{ route('convidados.index') }}" class="btn btn-sm btn-secondary">Voltar</a>
        </div>
    </div>
</div>
@endsection