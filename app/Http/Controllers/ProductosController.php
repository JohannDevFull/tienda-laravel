<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Producto::all();

        return view('admin.productos' , [
            "productos" => $productos
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = Producto::find($id);
        $productos = Producto::all();

        return view('admin.productos_edit' , [
            "producto" => $producto,
            "productos" => $productos,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre'        => 'required',
            'precio'        => 'required',
            'descripcion'   => 'required',
            'url_img'      => 'required'
        ]);

        $tutorial_a = Producto::create([
            'nombre'        => $request->nombre,
            'precio'        => $request->precio,
            'descripcion'   => $request->descripcion,
            'url_path'      => $request->url_img
        ]);

        return response()->json([
            'mesage'    => 'Success',
            'status'    => '200',
            'data'      => $tutorial_a
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nombre'        => 'required',
            'precio'        => 'required',
            'descripcion'   => 'required',
            'url_img'      => 'required'
        ]);

        $tutorial_a = Producto::where('id' ,'=', $id )
        ->update([
            'nombre'        => $request->nombre,
            'precio'        => $request->precio,
            'descripcion'   => $request->descripcion,
            'url_path'      => $request->url_img
        ]);

        return response()->json([
            'mesage'    => 'ok',
            'status'    => '200',
            'data'      => $tutorial_a
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto = Producto::find($id);
 
        $producto->delete();

        return  "ok delete";
    }
    
}
