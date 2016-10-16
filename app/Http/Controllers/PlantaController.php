<?php 
namespace projetoIrrigacao\Http\Controllers;

use projetoIrrigacao\App\Planta;
use Illuminate\Support\Facades\DB;
use View;
use Request;

class PlantaController extends Controller{

	public function lista() {

		$plantas = DB::select('select * from planta');
		
		return View::make('planta.listagem')->withPlantas($plantas);
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
		
		//DB::insert('insert into planta(nome, apelido, imagem, descricao) values (?,?,?,?)', array($nome, $apelido, $image, $descricao));
		DB::table('planta')->insert(
			['nome' => $nome,
			 'apelido' => $valor,
			 'imagem' => $image,
			 'descricao' => $descricao
			]
		);

		return view('adicionado')->with('nome', $nome);
	}

/*	
	public function editar() {
		DB::update('update from planta where idPlanta = '.$id);

		return view('editar');
	}
*/

	public function exclui($id) {
		$planta = DB::delete('delete from planta where idPlanta = ?', [$id]);
		
		return view('excluido');
	}
}