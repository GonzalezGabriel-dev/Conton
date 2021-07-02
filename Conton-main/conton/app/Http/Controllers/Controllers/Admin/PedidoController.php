<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use File;
use Auth;
use App\Models\Order;
use App\Models\Sale_detail;

class PedidoController extends Controller
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
        $datos=\DB::table('orders')->select('orders.*')->orderBy('id','DESC')->get();
        $product = \DB::table('orders')
            ->join('products', 'products.id', '=', 'orders.id_product')
            ->join('clients', 'clients.id', '=', 'orders.id_client')
            ->select('orders.*', 'products.name','clients.name_client','products.price')
            ->where('orders.status', '=', 1)
            ->get();
        return view('admin.pedidos')->with('order',$product);
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
    public function edit(Request $request)
    {
        $pedido=Order::find($request->id);
        $pedido->status='0';
        
        $sale = Sale_detail::create([
            'id_product' => $request->id_product,
            'id_client' => $request->id_client,
            'quantity' => $request->quantity,
            'date' => $request->date,
            'amount' => $request->precio
        ]);
        $sale->save();
        $pedido->save();
        return back();
        
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
        $pedido=Order::find($id);
        $pedido->delete();
        return back()->with('Listo','Se ha borrado correctamente');
    }
}
