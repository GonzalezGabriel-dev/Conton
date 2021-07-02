<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Auth;

class PedidoClienteController extends Controller
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
        if(Auth::user()->level!="cliente"){
            return redirect("/admin");
        }
        $id=Auth::user()->id;
        $datos=\DB::table('orders')->select('orders.*')->orderBy('id','DESC')->get();
        $product = \DB::table('orders')
            ->join('products', 'products.id', '=', 'orders.id_product')
            ->join('clients', 'clients.id', '=', 'orders.id_client')
            ->select('orders.*', 'products.name','clients.name_client','products.price')
            ->where('orders.id_client', '=', $id)
            ->where('orders.status', '=', 0)
            ->get();
        return view('admin.pedidosCliente')->with('order',$product);
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
        $pedido=Order::find($id);
        $pedido->delete();
        return back()->with('Listo','Se ha Cancelado correctamente');
    }
}
