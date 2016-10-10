<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PlantaTableSeeder::class);
    }
}

// Seed da Tabela Planta
class PlantaTableSeeder extends Seeder
{
	
	public function run() {
		
		DB::insert('insert into planta
				  (nome, apelido, imagem, descricao)
				  values (?,?,?,?)',
				  array('Orquídea', 'Orquídea Negra', 'https://upload.wikimedia.org/wikipedia/commons/a/a0/Orchis_militaris_flowers.jpg' , 'Orquídeas são todas as plantas que compõem a família Orchidaceae, pertencente à ordem Asparagales, uma das maiores famílias de plantas existentes. Apresentam muitíssimas e variadas formas, cores e tamanhos e existem em todos os continentes, exceto na Antártida, predominando nas áreas tropicais. Maioritariamente epífitas, as orquídeas crescem sobre as árvores, usando-as somente como apoio para buscar luz; não são plantas parasitas, nutrindo-se apenas de material em decomposição que cai das árvores e acumula-se ao emaranhar-se em suas raízes. Elas encontram muitas formas de reprodução: na natureza, principalmente pela dispersão das sementes mas em cultivo pela divisão de touceiras, semeadura in-vitro ou meristemagem.'));
		DB::insert('insert into planta
				  (nome, apelido, imagem, descricao)
				  values (?,?,?,?)',
				  array('Margarida', 'Daisy', 'https://static.significados.com.br/foto/margarida-0d.jpg' , 'A margarida, flor cujo nome científico é Chrysanthemum leucanthemum, é uma flor que também é conhecida como malmequer, crisântemo, bem-me-quer, bonina, margarita, margarita-maior, malmequer-maior, malmequer-bravo, e olho-de-boi.'));

	}
}