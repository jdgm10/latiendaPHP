<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Aqui va la lista de productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo "Aqui va el formulario para el registro del producto";
        $marcas = Marca::all();
        $categoria = Categoria::all();
        return view('productos.new')
        ->With('categorias', $categoria)
        ->With('marcas', $marcas);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // aceder a los datos del formulario
        // utilizando el objeto request
        // echo "<pre>";
        // var_dump($request->all());
        // echo "</pre>";

        $archivo = $request->imagen;

        $nombre_archivo = $archivo->getClientOriginalname();
        var_dump($nombre_archivo);
        $ruta = public_path();
        $archivo->move("$ruta/img", $nombre_archivo);
        // registrar producto
        $producto = new producto;
        $producto-> nombre = $request->nombre;
        $producto-> descrpcion = $request->desc;
        $producto-> precio = $request->precio;
        $producto-> imagen = $nombre_archivo;
        $producto-> marca_id = $request->marca;
        $producto-> categoria_id = $request->categoria;
        $producto->save();
        echo "producto registrando";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "el detalle de producto con id: $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "el form para editar el producto con id: $producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
