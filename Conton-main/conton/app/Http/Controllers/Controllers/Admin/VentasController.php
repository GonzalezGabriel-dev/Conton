<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use File;
use Auth;
use PDF;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user()->level!="admin"){
            return redirect("/admin");
        }
        
        $sale = \DB::table('sale_details')
            ->join('products', 'products.id', '=', 'sale_details.id_product')
            ->join('clients', 'clients.id', '=', 'sale_details.id_client')
            ->select('sale_details.*', 'products.name','clients.name_client')
            ->get();
        return view('admin.ventas')->with('order',$sale);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function generar()
    {
        $sale = \DB::table('sale_details')
            ->join('products', 'products.id', '=', 'sale_details.id_product')
            ->join('clients', 'clients.id', '=', 'sale_details.id_client')
            ->select('sale_details.*', 'products.name','clients.name_client')
            ->get();
        $fecha=date("d-m-Y");
        $todo=compact('sale','fecha');
        $pdf = PDF::loadView('reportes.ventas', $todo);
        return $pdf->stream('reporte.pdf');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
