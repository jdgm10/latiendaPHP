@extends('layouts.menu')

@section('contenido')
@if(session('mensaje'))

<div class="row">
  <p>{{ session('mensaje') }} </P>
</div>
@endif
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
                <Strong>{{ $errors->first('nombre') }}</Strong>
            </div>
        </div>
        <div class="row">
        <div class="input-field col s8">
        <textarea id="desc" name="desc"class="materialize-textarea"></textarea>
          <label for="desc">Descripción</label>
          <Strong>{{ $errors->first('desc') }}</Strong>
        </div>
        <div class="row">
          <div class="col s8 input-field">
            <input type="number" id="precio" name="precio">
          <label for="precio">Precio</label>
          <Strong>{{ $errors->first('precio') }}</Strong>
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
      <Strong>{{ $errors->first('imagen') }}</Strong>
        </div>
        <div class="row">
          <div class="col s8 input-field">
            <select name="marca" id="marca">
            <option value="">Seleccione Marca</option>
              @foreach($marcas as $marca)
              <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
              @endforeach
            </select>
            <label>Seleccione marca</label>
            <Strong>{{ $errors->first('marca') }}</Strong>
          </div>
          
        </div>
        <div class="row"><div class="col s8 input-field">
            <select name="categoria" id="categoria">
            <option value="">Seleccione Categoria</option>
              @foreach($categorias as $categoria)
              <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
              @endforeach
            </select>
            <label>Seleccione Categoria</label>
              <Strong>{{ $errors->first('categoria') }}</Strong>
          </div>
        
        </div></div>
        <div class="row"> <button class="btn waves-effect waves-light" type="submit" name="action">Guardar Producto
    <i class="material-icons right">send</i></div>
        

    </form>
</div>
@endsection