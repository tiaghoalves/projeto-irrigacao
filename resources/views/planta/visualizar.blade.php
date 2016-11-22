@extends('layout.principal')

@section('conteudo')
  <h1 class="ls-title-intro ls-ico-users">Dados da Planta</h1>
  <div class="ls-box">
    <div class="ls-float-right ls-regroup">
      <a href="{{ action('PlantaController@lista', Auth::user()->id) }}" class="ls-btn-primary" >Voltar para lista</a>
      <div data-ls-module="dropdown" class="ls-dropdown ls-pos-right">
        <a href="#" class="ls-btn"></a>
        <ul class="ls-dropdown-nav">
          <li>
            <a href="/" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" class="domain-actions">Editar</a>
          </li>
          <li><a href="#" data-ls-module="modal" data-target="#editPassword">Alterar senha</a></li>
        </ul>
      </div>
    </div>
    {!! Form::open(['action' => ['PlantaController@editar', $p->idPlanta], 'files' => true, 'data-ls-module' => 'form']) !!}
      <fieldset id="domain-form" class="ls-form-disable ls-form-text">
        {!! Form::token() !!}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="idPlanta" value="{{ $p->idPlanta }}">
        <label class="ls-label col-md-6 col-lg-8">
          <img width="350px" height="250px" src="/img/plantas/{{ $p->imagem }}" name="imagem">
        </label>
        <label class="ls-label col-md-6 col-lg-8">
          {!! Form::label('imagem', 'Selecione uma imagem:') !!}
          {!! Form::file('imagem', null, ['class' => 'form-control']) !!}
        </label>
        <label class="ls-label col-md-5 form-group">
          {!! Form::label('nome', 'Nome:') !!}
          {!! Form::text('nome', $p->nome, ['class' => 'form-control']) !!}
        </label>
        <label class="ls-label col-md-5 form-group">
          {!! Form::label('apelido', 'Apelido:') !!}
          {!! Form::text('apelido', $p->apelido, ['class' => 'form-control']) !!}
        </label>
        <label class="ls-label col-md-5 form-group col-lg-7">
          {!! Form::label('descricao', 'Informações:') !!}
          {!! Form::textarea('descricao', $p->descricao, ['class' => 'form-control', 'rows' => 5] ) !!}
        </label>
        <label class="ls-label col-md-2 form-group">
          {!! Form::label('status', 'Status:') !!}
          <div class="form-control">
            @if( $p->status == 1)
              Ativo: {!! Form::radio('status', 'Ativo', true) !!} <br>
              Inativo: {!! Form::radio('status', 'Inativo') !!}
            @else
              Ativo: {!! Form::radio('status', 'Ativo') !!} <br>
              Inativo: {!! Form::radio('status', 'Inativo', true) !!}
            @endif
          </div>
        </label>
        <label class="ls-label col-md-5 form-group">
          {!! Form::label('dataCadastro', 'Data de Cadastro:') !!}
          {!! Form::text('dataCadastro', date('d/m/Y', strtotime($p->created_at)), ['class'=>'form-control']) !!}
        </label>
        <div class="domain-actions ls-display-none ls-txt-center">
            {!! Form::submit('Salvar', array( 'class'=>'ls-btn-primary' )) !!}
            <button class="ls-btn" data-ls-fields-enable="#domain-form" data-toggle-class="ls-display-none" data-target=".domain-actions" >Cancelar</button>
        </div>
      </fieldset>
    </form>
    {!! Form::close() !!}
  </div>
@stop