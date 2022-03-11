@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Servicios
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:45%">Categoría</th>
                        <th style="width:45%">Estatus</th>
                        <th style="width:10%">
                            <a class="btn btn-primary sm-btn" href="{!! route('categorias.create') !!}">Nuevo</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->categoria }}</td>
                        <td>{{ $categoria->estatus }}</td>
                        <td>
                            <a class="btn btn-secondary sm- btn" href="{!! route('categorias.edit', $categoria->id) !!}">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
