<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function about() {
        return view('about');
    }

    function search(Request $request){
         //dd($request);
    //$Keyword=$request->q;
    //$message="キーワードは{$Keyword}です";
    $data=['keyword'=>$request->q];
    return view('search',$data);
    }
}
