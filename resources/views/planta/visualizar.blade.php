@extends('layout.principal')

@section('conteudo')
  <h1 class="ls-title-intro ls-ico-users">Dados da Planta</h1>

  <div class="ls-box">
    <div class="ls-float-right ls-regroup">
      <a href="/planta" class="ls-btn-primary" >Acessar o Painel</a>
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

    <form action="" class="ls-form row" data-ls-module="form">
      <fieldset id="domain-form" class="ls-form-disable ls-form-text">
        <label class="ls-label col-md-6 col-lg-8">
          <img width="300px" height="250px" src="{{$p->imagem}}">
        </label>
        <label class="ls-label col-md-6 col-lg-8">
          <b class="ls-label-text">Nome:</b>
          <input type="text" value="{{$p->nome}}" required>
        </label>
        <label class="ls-label col-md-6 col-lg-8">
          <b class="ls-label-text">Apelido:</b>
          <input type="text" value="{{$p->apelido}}" required>
        </label>
        <label class="ls-label col-md-6 col-lg-8">
          <b class="ls-label-text">Status:</b>
          <input type="text" value="Ativo" required>
        </label>
        <label class="ls-label col-md-6 col-lg-8">
          <b class="ls-label-text">Data de cadastro:</b>
          <input type="text" value="18/05/1987" required>
        </label>
        <label class="ls-label col-md-6 col-lg-8">
          <b class="ls-label-text">Informações:</b>
          <textarea name="" id="" cols="30" rows="5">{{$p->descricao}}</textarea>
        </label>
        </fieldset>
          <div class="domain-actions ls-display-none">
            <button type="submit" class="ls-btn-primary">Salvar</button>
            <button class="ls-btn" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" >Cancelar</button>
        </div>
      </form>
    </div>
@stop