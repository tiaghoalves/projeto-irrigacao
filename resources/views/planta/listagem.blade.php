@extends('layouts.principal')
@section('header')
<link href="/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
@stop
@section('conteudo')
    <h1 class="ls-title-intro ls-ico-list">Listagem de Plantas</h1>
    <a href="{{ action('PlantaController@novo') }}" class="ls-btn-primary ls-ico-plus"> Cadastrar Planta</a>
    <hr>
    @if(empty($plantas))
      <div class="ls-alert-danger">
        <strong>Opss!</strong> Você não tem nenhuma planta cadastrada.
      </div>    
    @else
    <div class="ls-box">
      @foreach ($plantas as $p)
        <div class="ls-list">
          <header class="ls-list-header">
            <div class="ls-list-title col-md-9">
              <a href="/planta/visualizar/{{$p->idPlanta}}" >{{$p->nome}}</a>
            </div>
            <div class="col-sm-9">
              <a href="/planta/visualizar/{{$p->idPlanta}}">
                <img width="100px" height="85px" class="ls-list-image" src="/img/plantas/{{$p->imagem}}" />  
              </a>
            </div>
            <div class="col-sm-3">
              <a href="/planta/visualizar/{{$p->idPlanta}}" class="ls-btn-primary ls-ico-eye"> Visualizar</a>
            </div>
          </header>
          <div class="ls-list-content ">
            <div class="col-xs-7 col-md-6">
              <div class="ls-box">
                <h5 class="ls-title-5 ls-display-inline-block">Status</h5>
                <div data-ls-module="switchButton" class="ls-switch-btn ls-float-right">
                  <input disabled type="checkbox" id="status" {{ ($p->status == 1) ? 'checked' :  '' }}>
                  <label class="ls-switch-label" for="status" name="label-status" ls-switch-off="Desativado" ls-switch-on="Ativado"><span></span></label>
                </div>
              </div>
            </div>
            <div class="col-sm-2 ls-txt-center">
              <a href="/planta/alterar/{{$p->idPlanta}}" class="ls-btn"> Alterar Status</a>
            </div>
            <div class="col-sm-2 ls-txt-center">
              <a href="/planta/exclui/{{$p->idPlanta}}" class="ls-btn-primary-danger ls-ico-remove"> Excluir</a>
            </div>
          </div>
        </div>
        <hr>
      @endforeach
    </div>
    <div class="row">
      <div class="ls-txt-center">
      {{ $plantas->links() }}
      </div>
    </div>
    @endif
  @if(old('nome'))
    <div class="ls-alert-success">
      <p>A planta <strong>{{ old('nome') }}</strong> foi adicionado com sucesso!
    </div>
    <hr>
  @endif
@stop

