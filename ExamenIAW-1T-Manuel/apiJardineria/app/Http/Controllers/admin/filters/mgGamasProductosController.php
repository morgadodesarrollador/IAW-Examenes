<?php

namespace App\Http\Controllers\admin\filters;

use App\Models\mgGamasProductos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storemgGamasProductosPost;
use Illuminate\Support\Facades\Input;

class mgGamasProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function mggamasproductos($id){
        $gamas = mggamasproductos::with('gamaproductos')->where('Gama', '=', $id)->get();
        return  response()->json($gamas);
    }

}
