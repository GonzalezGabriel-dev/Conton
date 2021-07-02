<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;
use Validator;
use File;
use Auth;

class ComprarController extends Controller
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
    public function index(Request $request)
    {
        $name = $request->input('id');
        
        if(Auth::user()->level!="cliente"){
            return redirect("/admin");
        }
        $id=Auth::user()->id;
        $datos=\DB::table('products')->where('id',$name)->first();
        $client=\DB::table('clients')->where('id_user',$id)->first();
        //$imagen=\DB::table('images')->where('id_product',$name)->value('image');
        $imagen=\DB::table('images')->select('images.*')->where('id_product',$name)->get();
        return view('admin.comprar')->with('producto',$datos)->with('imagen',$imagen)->with('cliente',$client);
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
        dd($request->id);
    }
    public function generar(Request $request)
    {
        $order = Order::create([
            'id_product' => $request->id,
            'id_client' => $request->id_client,
            'quantity' => $request->quantity,
            'total' => $request->total,
            'status' => $request->status,
            'date' => $request->date
        ]);
        $order->save();
        return back()->with('Listo','Se ha generado correctamente la venta');
    }
    public function cliente(Request $request)
    {
        //
        $client = Client::create([
            'id_user' => $request->id_user,
            'name_client' => $request->name_client,
            'address' => $request->address,
            'email' => $request->email,
            'telephone' => $request->phone,
            'city' => $request->city
        ]);
        $client->save();
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
