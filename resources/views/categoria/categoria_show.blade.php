@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria - show</div>

                <div class="card-body">


                    <p><strong>Id: </strong>{{ $categoria->id }}</P>
                    <p><strong>Nome: </strong>{{ $categoria->nome }}</P>
                    <p><strong>Criação: </strong>{{ $categoria->created_at }}</P>
                    <p><strong>Atualização: </strong>{{ $categoria->updated_at }}</P>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
