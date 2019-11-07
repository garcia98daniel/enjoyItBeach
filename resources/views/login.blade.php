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
    <script src="../../plugins/iCheck/icheck.min.js"></script>
   </head>
  <body>

    <div class="contenedor_login">
      <!-- <img src="../imagenes/logo.jpeg" alt="" class="imagenlogo"> -->
      <div class="imagenlogo"></div>
      <form action="Login" method="POST" class="form">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
        <input type="email" class="form-control" name="email" placeholder="correo" >
        <input type="password" class="form-control" name="password" placeholder="contraseña">
        <button class="btn btn-block boton">Inicio</button>
      </form>
      <a href="/register" class="">Registrate</a>
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
