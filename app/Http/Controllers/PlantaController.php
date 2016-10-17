<?php 
namespace projetoIrrigacao\Http\Controllers;

use projetoIrrigacao\App\Planta;
use DB;
use View;
use Request;

class PlantaController extends Controller{

	public function __construct() {
		$this->middleware('auth-middleware',
							['only' => ['adiciona', 'exclui']
						  ]);
	}

	public function lista() {
		$plantas = DB::select('select * from planta');
		
		return view('planta.listagem')->withPlantas($plantas);
	}

	public function listaJson(){
		$plantas = DB::select('select * from planta');
		return response()->json($plantas);
	}

	public function visualizar($id) {
		$resposta = DB::select('select * from planta where idPlanta = ? ', [$id]);

		if (empty($resposta)) {
			return view('errors.404');
		}

		return view('planta.visualizar')->with('p', $resposta[0]);
	}

	public function novo() {
		return view('planta.formulario');
	}

	public function adiciona() {
		$nome = Request::input('nome');
		$apelido = Request::input('apelido');
		$descricao = Request::input('descricao');
		$image = Request::input('imagem');
		
		DB::table('planta')->insert(
			['nome' => $nome,
			 'apelido' => $apelido,
			 'imagem' => $image,
			 'descricao' => $descricao
			]
		);

		return redirect()
				->route('listagem')
				->withInput(Request::only('nome'));
	}

	public function exclui($id) {
		if ($id == null) {
			return view('errors.404');
		}
		
		DB::table('planta')->where('idPlanta', '=', $id)->delete();

		return redirect()->route('listagem');
	}
	
	public function editar($id) {
		$nome = Request::input('nome');
		$apelido = Request::input('apelido');
		$descricao = Request::input('descricao');

		DB::table('planta')
            ->where('idPlanta', $id)
            ->update(
            	['nome' => $nome,
            	 'apelido' => $apelido,
            	 'descricao' => $descricao
            	]
            );

		return redirect('/planta/visualizar/'.$id);
	}

}