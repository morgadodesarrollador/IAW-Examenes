<?php

namespace App\Http\Controllers\admin\filters;

use App\Models\mgProductos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storemgProductosPost;
use Illuminate\Support\Facades\Input;

class mgProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function mgproductos($id){
        $productos = mgproductos::with('productos')->where('CodigoProducto', '=', $id)->get();
        return  response()->json($productos);
    }

}
