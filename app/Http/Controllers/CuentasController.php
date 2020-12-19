<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cuenta;
class CuentasController extends Controller
{

    function index(){

        $cuentas = Cuenta::all();

        return view ('/cuentas/index',['cuentas'=>$cuentas]);

    }

    //
}
