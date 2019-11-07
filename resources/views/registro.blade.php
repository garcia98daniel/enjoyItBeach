<style>
  body{
    background-image: url('../imagenes/playabg.jpg');
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .contenedor_login{
    min-width: 30%;
    min-height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background: white;
    padding: 50px;
    padding-top: 20px;
    border-radius: 8px;
  }

  .imagenlogo{
    height: 60vh;
    width: 100%;
    background-image: url('../imagenes/logo.jpeg');
    background-size: contain;
    background-repeat: no-repeat;
    margin-bottom: 20px;
  }

    @media (max-width: 560px){
      .imagenlogo{
        height: 40vh;
      }
   }

  .form{
    width: 100%;
  }

  .form-control{
    margin-bottom: 10px !important;
  }

  .boton{
    background-color: #5db2e3;
    color: white !important;
  }

  .boton:hover{
    color: white !important;
  }
</style>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Laravel | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <!-- <script src="../../plugins/iCheck/icheck.min.js"></script> -->
   </head>
  <body>

    <div class="contenedor_login">
      <!-- <img src="../imagenes/logo.jpeg" alt="" class="imagenlogo"> -->
      <h2>Enjoy<small>It</small><strong>Beach</strong></h2>
      <strong>Registrate </strong>
      <form action="register" method="post" class="form">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
        <div class="form-group has-feedback">
            <label>nombre</label>
            <input type="text" class="form-control" name="nombre" >
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>


           <div class="form-group has-feedback">
             <label>email</label>
            <input type="email" class="form-control" name="email" >
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
                <label>password</label>
            <input type="password" class="form-control" name="password" >
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="custom-control custom-radio">
            <h5> <strong>soy:</strong> </h5>
              <div class="col-md-6 col-xs-12">
                  <input type="radio" id="customRadio1" name="tipoUsuario" class="custom-control-input" value="1">
                  <label class="custom-control-label" for="customRadio1">Consumidor</label>
              </div>
              <div class="col-md-6 col-xs-12">
                  <input type="radio" id="customRadio2" name="tipoUsuario" class="custom-control-input " value="2">
                  <label class="custom-control-label" for="customRadio2">Vendedor</label>
              </div>
          </div>
         
          <button class="btn btn-block boton">Registrarse</button>
          <a href="/Login" class="">Tengo una cuenta</a>
      </form>
    </div>




    <script>
      
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
<!-- <script src="js/sweetalert.min.js"></script> -->
@include('sweetalert::alert')
  </body>
</html>