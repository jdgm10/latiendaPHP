<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//ruta en laravel

Route::get('Hola',function (){
   echo "hi ";
});

Route::get('arreglos',function (){
    $estudiantes =["AN" =>"Ana",
    "JO" =>"Johana",
    "PE" =>"Petra"];
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
    //Agregar un nuevo campo
    echo "<hr />";
    $estudiantes[] = "Johan";
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
    //Retirar elementos 
    echo "<hr />";
    unset($estudiantes["AN"]);
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";

 });

 Route::get('paises',function (){
   $pais =["Colombia" => [
       "capital" => "bogota",
       "moneda" => "peso colombiano",
       "poblacion" => 51.6,
       "ciudades" => [
      "bogota",
      "medellin",
      "cali"
       ]
   ],
   "peru"=>[
    "capital" => "lima",
    "moneda" => "sol",
    "poblacion" => 32.97,
    "ciudades" => [
        "arequipa",
        "cusco",
        "trujillo"
         ]
   ],
  "paraguay"=>[
    "capital" => "asuncion",
    "moneda" => "Guaraní paraguayo",
    "poblacion" => 7.13,
    "ciudades" => [
        "encarnacion",
        "ciudad del este"
         ]
  ]];
//   echo "<pre>";
//     var_dump($pais);
//     echo "</pre>";

//    foreach($pais as $paises =>$infopais){
//        echo"<h1>$paises </h1>";
//  foreach($infopais as $clave =>$valor){
// echo "$clave : $valor<br/>";
//  }
//     echo "<hr />";
//  }
//mostrar la vista de paises
return view('paises')
->with("pais", $pais);
 
 });

