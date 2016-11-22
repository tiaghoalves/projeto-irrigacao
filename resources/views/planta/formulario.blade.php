@extends('layout.principal')

@section('conteudo')
<h1 class="ls-title-intro ls-ico-users">Cadastrar planta</h1>
{!! Form::open(['action'=>'PlantaController@adiciona', 'files'=>true]) !!}
  <legend class="ls-title-2">Identificação</legend>
  {!! Form::token() !!}
  @if( Auth::check() )
    <input type="hidden" name="idUser" value="{{ Auth::user()->id }}">
  @endif
<div class="row">
  <label class="ls-label col-md-5">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class'=>'form-control']) !!}
  </label>
</div>
<div class="row">
  <label class="ls-label col-md-5">
    {!! Form::label('apelido', 'Apelido:') !!}
    {!! Form::text('apelido', null, ['class'=>'form-control']) !!}
  </label>
</div>
<div class="row">
  <label class="ls-label col-md-5">
    {!! Form::label('descricao', 'Descrição:') !!}
    {!! Form::textarea('descricao', null, ['class'=>'form-control', 'rows'=>5] ) !!}
  </label>
</div>
<div class="row">
  <label class="ls-label col-md-3">
    {!! Form::label('imagem', 'Escolha uma imagem') !!}
    {!! Form::file('imagem', null, ['class'=>'form-control']) !!}
  </label>
</div>
<div class="form-group">
    {!! Form::submit('Salvar', array( 'class'=>'ls-btn-primary' )) !!}
    <a href="/planta" class="ls-btn">Cancelar</a>
</div>
{!! Form::close() !!}
@stop