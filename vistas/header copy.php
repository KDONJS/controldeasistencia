 <?php 
if (strlen(session_id())<1) 
  session_start();
  ?>
 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>KDON</title>
     <!-- Tell the browser to be responsive to screen width -->
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <!-- Bootstrap 3 -->
     <link rel="stylesheet" href="../public/css/bootstrap.min.css">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="../public/css/font-awesome.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
     <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="../public/css/_all-skins.min.css">
     <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
     <link rel="shortcut icon" href="../public/img/fav.ico">

     <!-- DATATABLES -->
     <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">
     <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet" />
     <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet" />

     <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

 </head>

 <body class="hold-transition skin-blue sidebar-mini">
     <!-- Load Facebook SDK for JavaScript -->
     <div id="fb-root"></div>

     <!-- Your customer chat code -->
     <div class="fb-customerchat" attribution=setup_tool page_id="280144326139427" theme_color="#0084ff"
         logged_in_greeting="Hola! deseas compartir algún sistema o descargar ?"
         logged_out_greeting="Hola! deseas compartir algún sistema o descargar ?">
     </div>
     <div class="wrapper">

         <header class="main-header">
             <!-- Logo -->
             <a href="escritorio.php" class="logo">
                 <!-- mini logo for sidebar mini 50x50 pixels -->
                 <span class="logo-mini"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                         fill="currentColor" class="bi bi-file-bar-graph-fill" viewBox="0 0 16 16">
                         <path
                             d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-2 11.5v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z" />
                     </svg></span>
                 <!-- logo for regular state and mobile devices -->
                 <span class="logo-lg"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                         fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                         <path
                             d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z" />
                     </svg></span>
             </a>
             <!-- Header Navbar: style can be found in header.less -->
             <nav class="navbar navbar-static-top">
                 <!-- Sidebar toggle button-->
                 <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                     <span class="sr-only">Navegación</span>
                 </a>

                 <div class="navbar-custom-menu">
                     <ul class="nav navbar-nav">

                         <li class="dropdown user user-menu">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="user-image"
                                     alt="User Image">
                                 <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span>

                             </a>
                             <ul class="dropdown-menu">
                                 <!-- User image -->
                                 <li class="user-header">
                                     <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle"
                                         alt="User Image">

                                     <p>
                                         <?php echo $_SESSION['nombre'].' '.$_SESSION['departamento']; ?>
                                         <small>VUELVE PRONTO</small>
                                     </p>
                                     <div class="pull-left">
                                         <a href="#" class="btn btn-primary btn-flat">Perfil</a>
                                     </div>
                                     <div class="pull-right">
                                         <a href="../ajax/usuario.php?op=salir"
                                             class="btn btn-danger btn-flat">Salir</a>
                                     </div>
                                 </li>
                                 <!-- Control Sidebar Toggle Button -->

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
                         <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle"
                             style="width: 50px; height: 50px;" alt="User Image">
                     </div>
                     <div class="pull-left info">
                         <p><?php echo $_SESSION['nombre']; ?></p>
                         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                     </div>
                 </div>
                 <!-- sidebar menu: : style can be found in sidebar.less -->
                 <ul class="sidebar-menu tree" data-widget="tree">
                     <li class="header">MENÚ DE NAVEGACIÓN</li>


                     <li><a href="escritorio.php"><i class="fa  fa-dashboard (alias)"></i> <span>Escritorio</span></a>
                     </li>

                     <!--
      <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mensajes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mensaje.php"><i class="fa fa-circle-o"></i> Mensaje</a></li>
          </ul>
      </li>

-->
                     <?php if ($_SESSION['tipousuario']=='Administrador') {
?>
                     <li class="treeview">
                         <a href="#">
                             <i class="fa fa-folder"></i> <span>Acceso</span>
                             <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                             </span>
                         </a>
                         <ul class="treeview-menu">
                             <li><a href="usuario.php"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                             <li><a href="tipousuario.php"><i class="fa fa-circle-o"></i> Tipo Usuario</a></li>
                             <li><a href="departamento.php"><i class="fa fa-circle-o"></i> Departamento</a></li>
                         </ul>
                     </li>

                     <li class="treeview">
                         <a href="#">
                             <i class="fa fa-folder"></i> <span>Departamento</span>
                             <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                             </span>
                         </a>
                         <ul class="treeview-menu">
                             <li><a href="departamento.php"><i class="fa fa-circle-o"></i> Departamento</a></li>
                         </ul>
                     </li>

                     <li class="treeview">
                         <a href="#">
                             <i class="fa fa-folder"></i> <span>Asistencias</span>
                             <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                             </span>
                         </a>
                         <ul class="treeview-menu">
                            <li><a href="../../vistas/asistencia.php"><i class="fa fa-circle-o"></i>Marcar</a></li>
                             <li><a href="asistencia.php"><i class="fa fa-circle-o"></i> Asistencia</a></li>
                             <li><a href="rptasistencia.php"><i class="fa fa-circle-o"></i> Reportes</a></li>

                         </ul>
                     </li>
                     <?php } ?>
                     <?php if ($_SESSION['tipousuario']!='Administrador') {
?>
                     <li class="treeview">
                         <a href="#">
                             <i class="fa fa-folder"></i> <span>Mis Asistencias</span>
                             <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                             </span>
                         </a>
                         <ul class="treeview-menu">
                             <li><a href="asistenciau.php"><i class="fa fa-circle-o"></i> Asistencia</a></li>
                             <li><a href="rptasistenciau.php"><i class="fa fa-circle-o"></i> Reportes</a></li>

                         </ul>
                     </li>
                     <?php } ?>

                     <li><a href="#"><i class="fa fa-question-circle"></i> <span>Ayuda</span><small
                                 class="label pull-right bg-yellow">PDF</small></a></li>
                     <li><a href="https://www.compartiendocodigos.net/"><i class="fa  fa-exclamation-circle"></i>
                             <span>Acerca de</span><small class="label pull-right bg-yellow">ComCod</small></a></li>

                 </ul>
             </section>
             <!-- /.sidebar -->
         </aside>