<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PainelController extends Controller
{
    public function __construct(Request $request){

	}
	
	public function index(Request $request){
		
		$userid = $request->session()->get('user.id');
		$user = DB::table('users')->get()
			->where('id',$userid)[0];
			
		$anuncios = DB::table('anuncios')->get()
			->where('userid',$userid);
		
		return view('painel.index',compact('user','anuncios'));
	}
}
