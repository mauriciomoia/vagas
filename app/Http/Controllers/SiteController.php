<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use App\Models\Candidato;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index(Anuncio $anuncios){
		$title = 'Anúncios';
		$anuncios = $anuncios->all();
		return view('index',compact('title','anuncios'));
	}
	
	public function login(Request $request){
		
		$result = DB::table('users')->get()
			->where('email',$_POST['email'])
			->where('senha',$_POST['senha']);
			
		if($result->count() > 0){
			$request->session()->put('user.nome', $result[0]->nome);
			$request->session()->put('user.email', $result[0]->email);
			$request->session()->put('user.id', $result[0]->id);
			return redirect('/painel');
		}else{
			return redirect('/');
		}
		
	}
	
	public function logout(Request $request){
		
		$request->session()->flush();
		return redirect('/');
	}
	
	public function candidatar($id = null){
		$candidato = new Candidato();
		$candidato->anuncioid = $id;
		$candidato->nome = $_POST['nome'];
		$candidato->email = $_POST['email'];
		$candidato->telefone = $_POST['telefone'];
		$candidato->apresentacao = $_POST['apresentacao'];
		$candidato->pretensaosalarial = $_POST['pretensaosalarial'];
		$candidato->github = $_POST['github'];
		$candidato->linkedin = $_POST['linkedin'];
		if(!$candidato->save()){
			echo 'Ocorreu um erro inesperado. Tentenovamente mais tarde';
			print_r($candidato);exit;
		}
		
		return redirect('/');
	}
	
	public function anuncio($id = null){
		
		$anuncio = Anuncio::find($id);
		return view('anuncio',compact('anuncio'));
	}
}
