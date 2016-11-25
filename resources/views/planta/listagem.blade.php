@extends('layouts.principal')

@section('conteudo')
    <h1 class="ls-title-intro ls-ico-list">Listagem de Plantas</h1>
    <a href="{{ action('PlantaController@novo') }}" class="ls-btn-primary ls-ico-plus"> Cadastrar Planta</a>
    <hr>
    @if(empty($plantas))
      <div class="ls-alert-danger">
        <strong>Opss!</strong> Você não tem nenhuma planta cadastrada.
      </div>    
    @else
      @foreach ($plantas as $p)
        <div class="ls-list">
            <header class="ls-list-header">
              <div class="ls-list-title col-md-9">
                <a href="/planta/visualizar/{{$p->idPlanta}}" >{{$p->nome}}</a>
              </div>
              <div class="col-md-9">
                <a href="/planta/visualizar/{{$p->idPlanta}}">
                  <img width="100px" height="85px" class="ls-list-image" src="/img/plantas/{{$p->imagem}}" />  
                </a>
              </div>
              <div class="col-sm-3 ">
                <a href="/planta/visualizar/{{$p->idPlanta}}" class="ls-btn-primary ls-ico-eye"> Visualizar</a>
              </div>
            </header>
            <div class="ls-list-content ">
              <div class="col-xs-12 col-md-6">
                <span class="ls-list-label"> Status</span>
                <strong>{{ ($p->status == 1) ?  'Ativo' : 'Inativo' }}</strong>
              </div>
              <div class="col-sm-2 ls-text-right">
                <a href="/planta/exclui/{{$p->idPlanta}}" class="ls-btn-primary-danger ls-ico-remove"> Excluir</a>
              </div>
              <div class="col-sm-2 ls-text-right">
                <a href="/planta/alterar/{{$p->idPlanta}}" class="ls-btn"> Alterar Status</a>
              </div>
            </div>
        </div>
        <hr>
      @endforeach
    @endif
  @if(old('nome'))
    <hr>
    <div class="ls-alert-success">
      <p>A planta <strong>{{ old('nome') }}</strong> foi adicionado com sucesso!
    </div>
  @endif
@stop