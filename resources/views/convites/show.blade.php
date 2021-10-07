@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2 class="mb-5">Dados do Convite</h2>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th scope="row">Nome</th>
                        <td>{{ $convite->nome }}</td>
                    </tr>
                    <tr>
                        <th scope="row">E-mail</th>
                        <td>{{ $convite->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <a href="{{ route('convites.index') }}" class="btn btn-sm btn-secondary">Voltar</a>
            <a href="{{ route('convites.edit', ['convite' => $convite->id]) }}" class="btn btn-sm btn-secondary">Editar</a>
            <form style="display: inline;" action="{{ route('convites.destroy', ['convite' => $convite->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">deletar</button>
            </form>
        </div>
    </div>
</div>
@endsection