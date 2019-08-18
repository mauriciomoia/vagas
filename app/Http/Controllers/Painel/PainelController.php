<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    public function __construct(){
		$this->middleware('auth');
		//->only(['function1','function2']);
		//->except(['function1','function2']);
	}
}
