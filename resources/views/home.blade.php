<style>
  .initial{
    cursor: pointer;
    margin: 20px 0;
    border-radius: 8px;
    height: 250px;
    background-size: cover;
    padding: 0 !important;
  } 

  .initial:hover{
    filter: grayscale(0.9);
  }

  .carpas_inicio{
    background-image: url("../imagenes/playa.jpg");
    background-repeat: no-repeat;
    background-position-y: -300px;
  }
  .comidas_inicio{
    background-image: url("../imagenes/comidas.jpg");
    background-repeat: no-repeat;
    background-position-y: -170px;
  }
  .productos_inicio{
    background-image: url("../imagenes/productos.jpg");
    background-repeat: no-repeat;
    background-position-y: -200px;
  }

  .text-initial-select h1{
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
    color: white;
    font-weight: 800;
    font-size: 5em;
    margin: 0;
  }

  .text-initial-select h1:hover{
   filter: brightness(0);
  }

  .li_menu:hover{
    background: #1e282c;
    border-left: solid white 3px;
  }

  .treeview-menu, .sidebar-menu{
    padding: 0 !important;
    margin: 0 !important;
  }

  @media (max-width:1090px){
    .carpas_inicio{
    background-position-y: 0;
  }
  .comidas_inicio{
    background-position-y: 0;
  }
    .productos_inicio{
      background-position-y: 0;
    }
  }

  @media (max-width: 560px){
    .text-initial-select h1{
      font-size: 3em;
    }
  }


</style>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EnjoyItBeach</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

     <link rel="stylesheet" href="css/sistemalaravel.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>E</b>B</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Enjoy</b>It<b>Beach</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
            
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Usuario</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                     Usuario Plusis
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <h4>{{ucfirst(trans(auth()->user()->nombre))}}</h4>
              <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"><a href="/home" style="border: none;">INICIO</a></li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Disfruta de</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active li_menu"><a href="javascript:void(0);" onclick="cargarformulario(1);" ><i class="fa fa-circle-o"></i>Carpas</a></li>
                <li class="active li_menu"><a href="javascript:void(0);" onclick="cargarformulario(2);" ><i class="fa fa-circle-o"></i>Comidas</a></li>
                <li class="active li_menu"><a href="javascript:void(0);" onclick="cargarformulario(3);" ><i class="fa fa-circle-o"></i>Productos y servicios</a></li>
              
              </ul>
            </li>

  
           
           
          
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" >
      <!-- <div class="content-wrapper" style="min-height:2000px !important;"> -->
        <!-- Content Header (Page header) -->
        <section class="content-header"> 
          <h1>
            Disfruta
            <small>de</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>


        <!-- contenido principal -->
        <section class="content"  id="contenido_principal">
        @if(auth()->user()->rol_idRol!=2)
          <div class="container-fluid">
            <div class="col-xs-10 col-xs-offset-1 bg-success initial carpas_inicio" onclick="cargarformulario(1);">

              <div class="text-initial-select"><h1>CARPAS</h1></div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="col-xs-10 col-xs-offset-1 bg-danger initial comidas_inicio" onclick="cargarformulario(2);">
              
              <div class="text-initial-select"><h1>COMIDAS</h1></div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="col-xs-10 col-xs-offset-1 bg-primary initial productos_inicio" onclick="cargarformulario(3);">
              
              <div class="text-initial-select"><h1>PRODUCTOS Y SERVICIOS</h1></div>
            </div>
          </div>
        @endif
        </section>
    
      <!-- cargador empresa -->
        <div style="display: none;" id="cargador_empresa" align="center">
            <br>
         

         <label style="color:#FFF; background-color:#ABB6BA; text-align:center">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

         <img src="imagenes/cargando.gif" align="middle" alt="cargador"> &nbsp;<label style="color:#ABB6BA">Realizando tarea solicitada ...</label>

          <br>
         <hr style="color:#003" width="50%">
         <br>
       </div>

  



      </div><!-- /.content-wrapper -->
     


     
    </div><!-- ./wrapper -->


    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>  $("#content-wrapper").css("min-height","2000px"); </script>
   
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
 
 <!-- javascript del sistema laravel -->
   <script src="js/sistemalaravel.js"></script>


  </body>
</html>
