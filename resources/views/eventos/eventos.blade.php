@extends('layouts.app')

@section('content')
<example-component>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Lista de Eventos <a href="{{ route('eventos.create') }}" class="btn btn-sm btn-primary">Novo</a></h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Data</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($eventos as $evento)
                        <tr>
                            <th scope="row">{{ $evento->id }}</th>
                            <td>{{ $evento->descricao }}</td>
                            <td>{{ $evento->data_evento }}</td>
                            <td>
                                <a href="{{ route('eventos.show', ['evento' => $evento->id]) }}" class="btn btn-sm btn-primary">Convidados</a>
                                <a href="{{ route('eventos.edit', ['evento' => $evento->id]) }}" class="btn btn-sm btn-primary">
                                    Editar
                                </a>
                                <form style="display: inline;" action="{{ route('eventos.destroy', ['evento' => $evento->id]) }}" method="POST">
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
        </div>
    </div>
</example-component>
@endsection