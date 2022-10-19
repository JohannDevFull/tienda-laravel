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
        $productos = Producto::all();

        return view('sitio.tienda',
            [ "productos" => $productos  ]
        );
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
