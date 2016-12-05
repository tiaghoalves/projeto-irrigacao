<?php

namespace projetoIrrigacao\Http\Controllers;

use projetoIrrigacao\Planta;
use projetoIrrigacao\Http\Requests\PlantasRequest;
use Illuminate\Http\Request;
use Auth;
use Validator;

class PlantaController extends Controller {

	public function __construct() {
		$this->middleware('auth', 
						 ['only' => ['adiciona', 'exclui', 'editar']]);
	}

	public function lista() {
		$plantas = (Auth::user() != null) ? Planta::all()->where('idUser', Auth::user()->id ) : [];
		
		return view('planta.listagem')->with('plantas', $plantas);
	}

	public function listaJson() {
		$plantas = Planta::all();
		return response()->json($plantas);
	}

	public function visualizar($id) {
		$planta = Planta::find($id);
		if (empty($planta)) {
			return view('errors.404');
		}

		return view('planta.visualizar')->with('p', $planta);
	}

	public function novo() {
		return view('planta.formulario');
	}

	public function adiciona(PlantasRequest $request) {
		$planta = new Planta($request->except('imagem'));		

        if ($request->hasFile('imagem')) {
        	$file = $request->file('imagem');
        	$name = $file->getClientOriginalName();
        	$file->move(public_path() . '/img/plantas/', $name);
        	$planta->imagem = $name;
        }

		$planta->save();
		return redirect()
				->action('PlantaController@lista')
				->withInput($request->only('nome'));
	}

	public function editar($id, PlantasRequest $request) {
		$planta = Planta::find($id);
		
		if ($request->hasFile('imagem')) {
        	$file = $request->file('imagem');
        	$name = $file->getClientOriginalName();
        	$file->move(public_path() . '/img/plantas/', $name);
        	$planta->imagem = $name;
        }
		
		$planta->nome = $request->input('nome');
		$planta->apelido = $request->input('apelido');
		$planta->descricao = $request->input('descricao');
		$planta->status = ($request->input('status') == 'Ativo') ? 1 : 0;
		$planta->save();
		return redirect('/planta/visualizar/' . $id);
	}

	public function exclui($id) {
		$planta = Planta::find($id);
		$planta->delete();
		return redirect()->action('PlantaController@lista');
	}

    public function alterar($id) {
    	$planta = Planta::find($id);
    	$planta->status = ($planta->status == 1) ? 0 : 1;
    	$planta->save();
    	return redirect()->action('PlantaController@lista'); 
    }

}

