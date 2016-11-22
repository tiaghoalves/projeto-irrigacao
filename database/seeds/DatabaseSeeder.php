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
		
		DB::insert('insert into users
				  (name, email, password)
				  values (?,?,?)', array('test','test@test.com','$2y$10$yWrC41AZiVn4a3/J5KYmaeqLqiH3NJNEEbtogu3tdi7kPqpnt7Zb6'));

		DB::insert('insert into planta
				  		(idUser, nome, apelido, imagem, descricao)
				  values (?, 	  ?, 	  ?, 	  ?, 		?)',
				  array('1', 'Orquídea', 'Orquídea Negra', 'orchis.jpg' , 'Orquídeas são todas as plantas que compõem a família Orchidaceae, pertencente à ordem Asparagales, uma das maiores famílias de plantas existentes. Apresentam muitíssimas e variadas formas, cores e tamanhos e existem em todos os continentes, exceto na Antártida, predominando nas áreas tropicais. Maioritariamente epífitas, as orquídeas crescem sobre as árvores, usando-as somente como apoio para buscar luz; não são plantas parasitas, nutrindo-se apenas de material em decomposição que cai das árvores e acumula-se ao emaranhar-se em suas raízes. Elas encontram muitas formas de reprodução: na natureza, principalmente pela dispersão das sementes mas em cultivo pela divisão de touceiras, semeadura in-vitro ou meristemagem.'));
		
		DB::insert('insert into planta
				  		(idUser, nome, apelido, imagem, descricao)
				  values (?, 	  ?, 	  ?, 	  ?, 		?)',
				  array('1', 'Margarida', 'Daisy', 'margarida.jpg' , 'A margarida, flor cujo nome científico é Chrysanthemum leucanthemum, é uma flor que também é conhecida como malmequer, crisântemo, bem-me-quer, bonina, margarita, margarita-maior, malmequer-maior, malmequer-bravo, e olho-de-boi.'));

		DB::insert('insert into planta
				  		(idUser, nome, apelido, imagem, descricao)
				  values (?, 	  ?, 	  ?, 	  ?, 		?)',
				  array('1', 'Rosa', 'Eva Venenosa', 'red_rose.jpg' , 'A rosa (do latim rosa) é uma das flores mais populares no mundo. Vem sendo cultivada pelo homem desde a Antiguidade. A primeira rosa cresceu nos jardins asiáticos há 5 000 anos. Na sua forma selvagem, a flor é ainda mais antiga. Celebrada ao longo dos séculos, a rosa, símbolo dos apaixonados, também marcou presença em eventos históricos importantes e decisivos. Fósseis dessas rosas datam de há 35 milhões de anos.'));

	}
}