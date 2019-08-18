<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use App\Models\Candidato;

class SiteController extends Controller
{
    public function index(Anuncio $anuncios){
		$title = 'Anúncios';
		$anuncios = $anuncios->all();
		return view('index',compact('title','anuncios'));
	}
	
	public function login(){
		return view('auth.login');
	}
	
	public function candidatar($id = null){
		if(isset($_POST) && $id){
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
		}
		return redirect('/');
	}
	
	public function anuncio($id = null){
		
		$anuncio = Anuncio::find($id);
		return view('anuncio',compact('anuncio'));
	}
}
