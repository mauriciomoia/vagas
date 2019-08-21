<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Anuncio;
use App\Models\Candidato;

class PainelController extends Controller
{
    public function __construct(Request $request){

	}
	
	public function index(Request $request){
		
		$userid = $request->session()->get('user.id');
		$user = User::find($userid);
		
		$anuncios = Anuncio::where('usuarioid',$userid)->get();
		return view('painel.index',compact('user','anuncios'));
	}
	
	public function anuncioadd(Request $request){
		$userid = $request->session()->get('user.id');
		
		$anuncio = new Anuncio;
		$anuncio->titulo = $_POST['titulo'];
		$anuncio->descricao = $_POST['descricao'];
		$anuncio->cidade = $_POST['cidade'];
		$anuncio->estado = $_POST['estado'];
		$anuncio->pais = $_POST['pais'];
		$anuncio->ativo = 1;
		$anuncio->usuarioid = $userid;

		if($anuncio->save()){
			return redirect('/painel');
		}else{
			echo 'Ocorreu um erro';exit;
		}
	}
	
	public function anuncioview($id = null,Request $request){
		
		$userid = $request->session()->get('user.id');
		$user = User::find($userid);
		$anuncio = Anuncio::find($id);
		$candidatos = Candidato::where('anuncioid',$id)->get();

		return view('painel.anuncioview',compact('user','anuncio','candidatos'));
	}
}
