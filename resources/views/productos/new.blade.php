@extends('layouts.menu')

@section('contenido')

<div class="row">
  <h1 class="cyan-text text.darken-4">Nuevo Producto</h1>
</div>
<div class="row">
    <form action="{{ route('productos.store')}}" class="col s8" method="POST" enctype="multipart/form-data">

    @csrf
        <div class="row">
            <div class="input-field col s8">
                <input  id="nombre" name="nombre" type="text" class="validate">
                <label for="nombre">Nombre de producto</label>
            </div>
        </div>
        <div class="row">
        <div class="input-field col s8">
        <textarea id="desc" name="desc"class="materialize-textarea"></textarea>
          <label for="desc">Descripción</label>
        </div>
        <div class="row">
          <div class="col s8 input-field">
            <input type="number" id="precio" name="precio">
          <label for="precio">Precio</label>
          </div>
        </div>
        <div class="file-field input-field">
      <div class="btn">
        <span>Imagen del producto</span>
      <input type="file" name="imagen">
      </div>
      <div class="file-path-wrapper">
      <input class="file-path validate" type="text" placeholder="Adjuntar">
      </div>
        </div>
        <div class="row">
          <div class="col s8 input-field">
            <select name="marca" id="marca">
              @foreach($marcas as $marca)
              <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
              @endforeach
            </select>
            <label>Seleccione marca</label>
          </div>
        </div>
        <div class="row"><div class="col s8 input-field">
            <select name="categoria" id="categoria">
              @foreach($categorias as $categoria)
              <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
              @endforeach
            </select>
            <label>Seleccione Categoria</label>
          </div>
        </div></div>
        <div class="row"> <button class="btn waves-effect waves-light" type="submit" name="action">Guardar Producto
    <i class="material-icons right">send</i></div>
        

    </form>
</div>
@endsection