<!DOCTYPE html>
<html class="ls-theme-gray">
<head>
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Login Page</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <link href="http://assets.locaweb.com.br/locastyle/3.9.0/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
</head>
<body class="documentacao documentacao_exemplos documentacao_exemplos_login-screen documentacao_exemplos_login-screen_index">

<div class="ls-login-parent">
  <div class="ls-login-inner">
    <div class="ls-login-container">
      <div class="ls-login-box">
  <h1 class="ls-login-logo">
    <img title="Logo login" width="100px" height="100px" src="https://openclipart.org/image/400px/svg_to_png/28913/ivan-alvarado-Hoja01.png" />
  </h1>
  <form role="form" class="ls-form ls-login-form" action="#">
    <fieldset>

      <label class="ls-label">
        <b class="ls-label-text ls-hidden-accessible">Usuário</b>
        <input class="ls-login-bg-user ls-field-lg" type="text" placeholder="Usuário" required autofocus>
      </label>

      <label class="ls-label">
        <b class="ls-label-text ls-hidden-accessible">Senha</b>
        <div class="ls-prefix-group">
          <input id="password_field" class="ls-login-bg-password ls-field-lg" type="password" placeholder="Senha" required>
          <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a>
        </div>
      </label>
      <p class="ls-txt-center ls-login-signup"><a href="home">Voltar a página inicial</a></p>
      
      <button type="submit" class="ls-btn-primary ls-btn-block ls-btn-lg">Entrar</button>
      <p class="ls-txt-center ls-login-signup">Não possui um usuário cadastrado? 
      <a href="{{ url('cadastro') }}">Cadastre-se agora</a></p>

    </fieldset>
  </form>
</div>

    </div>
  </div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://assets.locaweb.com.br/locastyle/3.9.0/javascripts/locastyle.js" type="text/javascript"></script>
</body>
</html>
