@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Crear categoria
        </div>
        <div class="card-body">
            <form action="{!! route('categorias.store') !!}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="categoria" class="form-label">Categoria</label>
                  <input type="text" class="form-control" id="categoria" name="categoria" required>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estatus" id="estatus1" value="activa">
                    <label class="form-check-label" for="estatus1">
                      Activa
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="estatus" id="estatus2" value="inactiva"checked>
                    <label class="form-check-label" for="estatus2">
                      Inactiva
                    </label>
                  </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
        </div>
    </div>
</div>
@endsection
