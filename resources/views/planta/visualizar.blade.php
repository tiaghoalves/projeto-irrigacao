@extends('layout.principal')

@section('conteudo')
  <h1 class="ls-title-intro ls-ico-users">Dados da Planta</h1>
  <div class="ls-box">
    <div class="ls-float-right ls-regroup">
      <a href="{{ action('PlantaController@lista') }}" class="ls-btn-primary" >Voltar para lista</a>
      <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
        <a href="#" class="ls-btn"></a>
        <ul class="ls-dropdown-nav">
          <li>
            <a href="" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" class="domain-actions">Editar</a>
          </li>
          <li><a href="#" data-ls-module="modal" data-target="#editPassword">Alterar senha</a></li>
          <li><a href="#">Desativar</a></li>
        </ul>
      </div>
    </div>
    <form action="/planta/editar/{{ $p->idPlanta }}" class="ls-form row" data-ls-module="form" method="post">
      <fieldset id="domain-form" class="ls-form-disable ls-form-text">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <input type="hidden" name="idPlanta" value="{{ $p->idPlanta }}">
        <label class="ls-label col-md-6 col-lg-8">
          <img width="300px" height="250px" src="{{$p->imagem}}" name="image">
        </label>
        <label class="ls-label col-md-6 col-lg-8">
          <b class="ls-label-text">Nome: </b>
          <input type="text" value="{{$p->nome}}" name="nome" required>
        </label>
        <label class="ls-label col-md-6 col-lg-8">
          <b class="ls-label-text">Apelido: </b>
          <input type="text" value="{{$p->apelido}}" name="apelido" required>
        </label>
        <label class="ls-label col-md-6 col-lg-8">
          <b class="ls-label-text">Status: </b>
          <input type="text" value="Ativo" required>
        </label>
        <label class="ls-label col-md-6 col-lg-8">
          <b class="ls-label-text">Data de cadastro: </b>
          <input type="text" value="18/05/1987" required>
        </label>
        <label class="ls-label col-md-6 col-lg-8">
          <b class="ls-label-text">Informações: </b>
          <textarea name="descricao" cols="30" rows="5">{{$p->descricao}}</textarea>
        </label>
        <div class="domain-actions ls-display-none ls-txt-center">
            <button type="submit" class="ls-btn-primary">Salvar</button>
            <button class="ls-btn" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" >Cancelar</button>
        </div>
        </fieldset>
      </form>
  </div>
@stop