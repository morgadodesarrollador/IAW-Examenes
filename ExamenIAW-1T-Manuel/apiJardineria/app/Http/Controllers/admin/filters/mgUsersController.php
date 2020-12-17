<?php

namespace App\Http\Controllers\admin\filters;

use App\Models\mgUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storemgUsersPost;
use Illuminate\Support\Facades\Input;

class mgUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function mgusers($id){
        $users = mgusers::with('users')->where('id', '=', $id)->get();
        return  response()->json($users);
    }

}
