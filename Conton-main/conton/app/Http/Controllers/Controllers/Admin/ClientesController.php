<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use File;
use Auth;

class ClientesController extends Controller
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
        //$datos=\DB::table('users')->select('users.*')->orderBy('id','DESC')->get();
        $datos=\DB::table('users')->select('users.*')->where('level', 'cliente')->get();
        return view('admin.clients')->with('usuarios',$datos);
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
        $validator= Validator::make($request->all(),[
            'nombre'=>'required|max:255|min:1',
            'correo'=>'required|max:255|min:1',
            'nivel'=>'required|max:255|min:1'
        ]);
        if($validator->fails()){
            return back()
            ->withInput()
            ->with('errorEdit','Favor de llenar todos los campos')
            ->withErrors($validator);
        }else{
            $usuario=User::find($request->id);
            $usuario->name=$request->nombre;
            $usuario->email=$request->correo;
            $usuario->level=$request->nivel;
            $validator2= Validator::make($request->all(),[
                'nombre'=>'required|max:255|min:1',
                'correo'=>'required|max:255|min:1',
                'nivel'=>'required|max:255|min:1',
                'imagen'=>'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048'
            ]);
            if(!$validator2->fails()){
                $imagen=$request->file('imagen');
                $nombre=time().'.'.$imagen->getClientOriginalExtension();
                $destino=public_path('usuarios/');
                $request->imagen->move($destino,$nombre);
                if(File::exists(public_path('usuarios/'.$usuario->image))){
                    unlink(public_path('usuarios/'.$usuario->image));
                }
                $usuario->image=$nombre;
            }
            $usuario->save();
            return back()->with('Listo','Se ha actualizado correctamente');
        }
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
        $usuario=User::find($id);
        $usuario->delete();
        return back()->with('Listo','Se ha borrado correctamente');
    }
}
