<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga

class SiteController extends Controller
{
    public function index(){
		$title = 'Vagas';
		
		return view('index',compact('title'));
	}
	
	public function login(){
		
	}
	
	public function cadastro(){
		
	}
	
	public function vaga($id = null){
		
	}
}
