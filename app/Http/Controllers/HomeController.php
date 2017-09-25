<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tourpackage;
use App\Schedule;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }
    public function showtour()
    {
        $package = Tourpackage::all();
        return view('welcome')->with('package',$package);
    }
    public function showdetail(Request $request)
    {
        $id = $request->tourid;
        $package = Tourpackage::where('id',$id)->get();
        return view('detail')->with('package',$package);
    }

}
