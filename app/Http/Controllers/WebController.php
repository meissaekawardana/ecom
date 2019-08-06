<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota as Anggota;

class WebController extends Controller
{
    public function index(){
    	$anggota['b']=Anggota::all();
    	return view('anggota',$anggota);
    }
}
