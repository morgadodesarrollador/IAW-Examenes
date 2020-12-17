<?php

namespace App\Http\Controllers\admin\filters;

use App\Models\mgClientes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storemgClientesPost;
use Illuminate\Support\Facades\Input;

class mgClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function mgclientes($id){
        $clientes = mgclientes::with('clientes')->where('Codigo', '=', $id)->get();
        return  response()->json($clientes);
    }

}
