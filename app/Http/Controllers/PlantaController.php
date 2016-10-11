<?php 
namespace projetoIrrigacao\Http\Controllers;

use projetoIrrigacao\App\Planta;
use Illuminate\Support\Facades\DB;
use View;
use Request;

class PlantaController extends Controller{

	public function lista() {

		$plantas = DB::select('select * from planta');
		
		return View::make('listagem')->withPlantas($plantas);
	}

	public function visualizar() {
		$id = Request::input('id', 0);

		$resposta = DB::select('select * from planta where idPlanta = ? ', [$id]);

		if (empty($resposta)) {
			return view('errors/404');
		}

		return view('visualizar')->with('p', $resposta[0]);
	}

	public function cadastrar($nome, $apelido, $imagem, $descricao) {

		DB::insert('INSERT INTO planta(idPlanta, nome, apelido, imagem, descricao) 
										VALUES (null, $nome, $apelido, $imagem, $descricao');
		
		return view('listagem');
	}

	public function editar($id) {

		DB::update('update from planta where idPlanta = '.$id);

		return view('editar');
	}

	public function delete($id) {

		$planta = DB::delete('delete from planta where idPlanta = ?', [$id]);

		return view('listagem');
	}

}