<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
<div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-5">
          <h1 class="mb-4">Login</h1>
          <form method="GET" name="formCad" id="formCad" action="{{url("logar")}}"">
       
            <div class="form-group"> 
              <input type="email" class="form-control" placeholder="Informe o Email" id="edt_email" name="edt_email"> 
            </div>
            <div class="form-group mb-3"> 
              <input type="password" class="form-control" id="edt_senha" name="edt_senha" placeholder="Informe a Senha"> <small class="form-text text-muted text-right"></small> 
            </div> 
            <button type="submit" class="btn btn-primary">Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>