<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    //

    public function inicio()
    {
        return view('sitio.inicio');
    }

    public function ofertas()
    {
        return view('sitio.ofertas');
    }

    public function login()
    {
        return view('sitio.login');
    }

    public function productos()
    {
        return view('sitio.tienda');
    }





    public function test()
    {
        # code...
        $productos = Producto::all();

        return view('test_productos',[ "productos" => $productos  ]);
    }
    public function mostrarProductoPorId($id)
    {
        # code...
        $producto = Producto::find($id);

        return view('sitio.producto_detalle',[
            "producto" => $producto
        ]);
    }

}
