<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view('admin.adminHome');
    }

    public function storeData(){

        $data = new \App\Blog();
        $data->contenido = \request()->all();
//        dd($data->contenido);
        $txt = \App\Blog::where([
            ['blog_id', '=', 1],
            ['title', '=' ,'Blog1']
        ])->update(['contenido' => $data->contenido["content1"]]);

        return redirect()->refresh();
    }

    public function hoteles(){
        // Get the pages that match from DB
        $txt = \App\Blog::where('title','Blog1')->get();

        return view('hoteles', compact('txt'));
    }
}
