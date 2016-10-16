<!DOCTYPE html>
<html class="ls-theme-green">
<head>
  <title>Dashboard Main Page</title>

  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link href="http://assets.locaweb.com.br/locastyle/3.9.0/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
  <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
  <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
</head>
<body>
<div class="ls-topbar ">

  <!-- Barra de Notificações -->
<div class="ls-notification-topbar">

    <!-- Links de apoio -->
  <div class="ls-alerts-list">
    <a href="#" class="ls-ico-bell-o" data-counter="8" data-ls-module="topbarCurtain" data-target="#ls-notification-curtain"><span>Notificações</span></a>
    <a href="#" class="ls-ico-bullhorn" data-ls-module="topbarCurtain" data-target="#ls-help-curtain"><span>Ajuda</span></a>
    <a href="#" class="ls-ico-question" data-ls-module="topbarCurtain" data-target="#ls-feedback-curtain"><span>Sugestões</span></a>
  </div>

  <!-- Dropdown com detalhes da conta de usuário -->
  <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
      <a href="#" class="ls-ico-user">
        <span class="ls-name">Teste User</span> (testUser)
      </a>

      <nav class="ls-dropdown-nav ls-user-menu">
        <ul>
          <li><a href="#">Perfil</a></li>
          <li><a href="/cadastro">Cadastro</a></li>
          <li><a href="/login">Login</a></li>
          <li><a href="#">Sair</a></li>
        </ul>
      </nav>
  </div>
</div>

  <span class="ls-show-sidebar ls-ico-menu"></span>

  <a href="/home"  class="ls-go-next"><span class="ls-text">Voltar à lista de serviços</span></a>
  <!-- Nome do produto/marca com sidebar -->
  <h1 class="ls-brand-name">
    <a href="/dashboard" class="ls-ico-earth">
      <small>Sistema de Controle de Irrigação</small>
      Dashboard
    </a>
  </h1>
</div>

<aside class="ls-sidebar">
  <div class="ls-sidebar-inner">
      <a href="#"  class="ls-go-prev"><span class="ls-text">Voltar à lista de serviços</span></a>

      <nav class="ls-menu">
        <ul>
          <li><a href="/dashboard" class="ls-ico-dashboard" title="Dashboard">Dashboard</a></li>
          <li><a href="/planta" class="ls-ico-stats" title="Plantas">Plantas</a></li>
          <li>
            <a href="#" class="ls-ico-cog" title="Configurações">Configurações</a>
            <ul>
              <li><a href="#">Aparência</a></li>
              <li><a href="#">Conta</a></li>
            </ul>
          </li>
        </ul>
      </nav>
  </div>
</aside>

<main class="ls-main ">
  <div class="container-fluid">
    
    @yield('conteudo')

  </div>
</main>

    <!-- We recommended use jQuery 1.10 or up -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.9.0/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>
