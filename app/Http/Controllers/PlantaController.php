<?php 
namespace projetoIrrigacao\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PlantaController extends Controller{

	public function lista() {

		$html = '<h1>Listagem de Plantas Cadastradas</h1>';
		$html .= '<ul>';
		$plantas = DB::select('select * from planta');

		foreach ($plantas as $planta) {
			$html .= "<img width='200px' height='300px' src=". $planta->imagem ."></img>";
			$html .= '<li> Nome: '. $planta->nome .' </li>
					  <li> Descricao: '. $planta->descricao .'</li>';

			$html .= '<hr>';
		}
		$html .= '</ul>';

		return $html;
	}

}