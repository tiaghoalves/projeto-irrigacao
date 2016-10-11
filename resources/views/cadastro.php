<!DOCTYPE html>
<html>
    <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="http://assets.locaweb.com.br/locastyle/3.9.0/stylesheets/locastyle.css" rel="stylesheet" type="text/css">

    <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>Cadastro</title>
  </head>
  <body>
<div class="ls-login-parent">
  <div class="ls-login-inner">
    <div class="ls-login-container">
      <div class="ls-login-box">
        <h1 class="text-center">
          <img title="Logo" width="100px" height="100px" src="https://openclipart.org/image/400px/svg_to_png/28913/ivan-alvarado-Hoja01.png" />
        </h1>
          <form class="ls-form ls-login-form" method="post" action="#">
            
              <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Name</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Email</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="username" class="cols-sm-2 control-label">Username</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Password</label>
                <div class="cols-sm-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required>
                  </div>
                </div>
              </div>

             <div class="form-group">
               <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
               <div class="cols-sm-10">
                 <div class="input-group">
                   <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                   <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password" required>
                </div>
              </div>
            </div>

            <div class="form-group ">
              <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
            </div>
            <div class="login-register text-center">
              <a href="login">Login</a> 
            </div>
            <div class="login-register text-center">
              <a class="float-right" href="home">Voltar a página inicial</a>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.9.0/javascripts/locastyle.js" type="text/javascript"></script>
  </body>
</html>