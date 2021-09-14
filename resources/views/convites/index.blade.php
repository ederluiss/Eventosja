@extends('layouts.app')

@section('content')
<example-component>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Lista de Convidados do Evento <a href="{{ route('convites.create') }}" class="btn btn-sm btn-primary">Novo</a></h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">idconvidado</th>
                        <th scope="col">idevento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($convites as $convite)
                    <tr>
                        <th scope="row">{{ $convite->id }}</th>
                        <td>{{ $convite->id_convidado }}</td>
                        <td>{{ $convite->id_evento }}</td>
                        <td>
                            <a href="{{ route('convites.show', ['convite' => $convite->id]) }}" class="btn btn-sm btn-primary">Ver</a>
                            <a
                                href="{{ route('convites.edit', ['convite' => $convite->id]) }}"
                                class="btn btn-sm btn-primary">
                                Editar
                            </a>
                            <form
                                style="display: inline;"
                                action="{{ route('convites.destroy', ['convite' => $convite->id]) }}" method="POST">
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
