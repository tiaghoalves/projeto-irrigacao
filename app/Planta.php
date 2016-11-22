<?php

namespace projetoIrrigacao;

use Illuminate\Database\Eloquent\Model;

class Planta extends Model {

    protected $table = 'planta';
    protected $primaryKey = 'idPlanta';
    protected $fillable = [ 'nome', 
    						'apelido', 
    						'descricao',
    						'imagem', 
    						'idUser', 
    						'status' ];
    protected $guarded = ['idPlanta'];
	const UPDATED_AT = null;

}
