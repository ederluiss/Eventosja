@extends('layouts.app')

@section('content')
<example-component>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Lista de Convidados <a href="{{ route('convidados.create') }}" class="btn btn-sm btn-primary">Novo</a></h2>
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
                            <a href="{{ route('convidados.show', ['convidado' => $convidado->id]) }}" class="btn btn-sm btn-primary">Ver</a>
                            <a
                                href="{{ route('convidados.edit', ['convidado' => $convidado->id]) }}"
                                class="btn btn-sm btn-primary">
                                Editar
                            </a>
                            <form
                                style="display: inline;"
                                action="{{ route('convidados.destroy', ['convidado' => $convidado->id]) }}" method="POST">
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
