@extends('layout.principal')

@section('conteudo')

<h1 class="ls-title-intro ls-ico-users">Cadastrar planta</h1>

<form action="/planta/adiciona" class="ls-form">
  <legend class="ls-title-2">Identificação</legend>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Nome</span>
      <input type="text" name="nome">
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Apelido</span>
      <input type="text" name="apelido">
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-6">
      <span class="ls-label-text">Descricão</span>
      <textarea rows="4" name="descricao"></textarea>
      <p class="ls-helper-text">Preencha informações adicionais da sua planta.</p>
    </label>
  </div>
  <div class="row">
    <label class="ls-label col-md-3">
      <span class="ls-label-text">Imagem</span>
      <input type="text" name="imagem">
    </label>
  </div>
  <button type="submit" class="ls-btn-primary">Salvar</button>
  <a href="/planta" class="ls-btn">Cancelar</a>
</form>
  <hr>
@stop