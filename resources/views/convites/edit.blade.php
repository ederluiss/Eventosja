@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('convite.update', ['convite' => $convite->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input class="form-control" id="nome" name="nome" value="{{ $convite->nome }}" />
                </div>

                <div class="form-group">
                    <label for="name">E-mail</label>
                    <input class="form-control" id="email" name="email" value="{{ $convite->email }}" />
                </div>
               
                <button style="display: inline;" type="submit" class="btn btn-sm btn-success">Atualizar</button>
            </form>
        </div>
        <div class="col-md-12">
            <a style="display: inline;" href="{{ route('convite.index') }}" class="mr-3 btn btn-sm btn-secondary">Voltar</a>
            <form style="display: inline-block;" action="{{ route('convite.destroy', ['convite' => $convite->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="mr-3 btn btn-sm btn-danger">deletar</button>
            </form>
        </div>
    </div>
</div>
@endsection
