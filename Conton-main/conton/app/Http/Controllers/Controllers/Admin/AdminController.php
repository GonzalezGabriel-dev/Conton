<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $total = \DB::table('orders')->where('status', '1');
        $total=$total->count();
        $total2 = \DB::table('sale_details')->get();
        $total2=$total2->count();
        $total3 = \DB::table('clients')->get();
        $total3=$total3->count();
        return view('admin.index')->with('total',$total)->with('total2',$total2)->with('total3',$total3);
    }
}
