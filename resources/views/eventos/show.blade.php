@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="mb-5">Dados do Evento</h2>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th scope="row">Descrição</th>
                        <td>{{ $evento->descricao }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Data</th>
                        <td>{{ $evento->data_evento }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <a href="{{ route('eventos.index') }}" class="btn btn-sm btn-secondary">Voltar</a>
            <a href="{{ route('eventos.edit', ['evento' => $evento->id]) }}" class="btn btn-sm btn-secondary">Editar</a>
            <form style="display: inline;" action="{{ route('eventos.destroy', ['evento' => $evento->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">deletar</button>
            </form>
        </div>
    </div>
</div>
@endsection