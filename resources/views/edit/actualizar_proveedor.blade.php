@extends('layouts.app')

@section('content')

<?php 

                use App\Proveedor as Proveedor;
                //$proveedor = Proveedor::where('nombre_proveedor','like','%OILRED S.A.%')
                //->get();
?>

<div class="wrapper">

  <header class="main-header skin-redsidebar-mini">
    <!-- Logo -->
    <a href="/home" class="logo navbar-fixed-top">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SIT</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SITM</b>Muria</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-fixed-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
           <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{ URL::asset('assets/AdminLTE-2.4.0/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php 
              if (Auth::user()->img_user == NULL){
                echo '<img src="../../../assets/AdminLTE-2.4.0/dist/img/avatar_default.jpg" class="user-image" alt="User Image">';
              } else{
                echo '<img src="{{ Auth::user()->img_user}}" class="user-image" alt="User Image">';
              }
            ?>
              
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
               <?php 
              if (Auth::user()->img_user == NULL){
                echo '<img src="../../../assets/AdminLTE-2.4.0/dist/img/avatar_default.jpg" class="user-image" alt="User Image">';
              } else{
                echo '<img src="{{ Auth::user()->img_user}}" class="user-image" alt="User Image">';
              }
            ?>

                <p>
                  <b>{{ Auth::user()->name }}</b>
                  <small>Miembro desde {{ Auth::user()->created_at }}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  
                  <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"  class="btn btn-default btn-flat">
                        Salir
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                    </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--<li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside  style="position: fixed; height: 7344px;" class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
           <!-- User image -->
               <?php 
              if (Auth::user()->img_user == NULL){
                echo '<img src="../../../assets/AdminLTE-2.4.0/dist/img/avatar_default.jpg" class="img-circle" alt="User Image">';
              } else{
                echo '<img src="{{ Auth::user()->img_user}}" class="img-circle" alt="User Image">';
              }
            ?>
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Configuracion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Tipos de Articulos</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Almacenes</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Fabricantes</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Tipos de Vehiculos</a></li>
            <!--<li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Fabricantes</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li> 
              <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            -->
            
          </ul>
        </li>
         
          <li><a href="/manobra"><i class="fa fa-hand-lizard-o"></i> <span>Mano de Obra</span></a></li>
          <li><a href="/proveedores"><i class="fa fa-truck"></i> <span>Proveedores</span></a></li>
          <li><a href="/articulos"> <i class="fa fa-archive"></i> <span>Articulos</span></a></li>
          <li><a href="/cliente"><i class="fa fa-users"></i> <span>Clientes </span></a></li>
          <li><a href="/servicios"><i class="fa fa-ship"></i> <span>Servicios</span></a></li>
          <li><a href="/actualizar_vehiculos"><i class="fa fa-refresh"></i> <span>Arctualizar Vehiculos</span></a></li>
        <!--<li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li> -->

     
       <!-- <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>-->
        <li class="header">Opciones</li>
        <li>
           <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              <i class="fa fa-circle-o text-red"></i> <span>Salir</span>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
          </form>
        </li>
        <!--<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!--<h1>
        SITM
        <small>Panel Principal</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section style="height: 944px;" class="content">

      <div style="padding: 0px, 34px, 0px, 34px;!important">
          <!--<img  src="{{ URL:: asset('assets/AdminLTE-2.4.0/dist/img/CintilloSITM.png')}}"> -->

      </div>
  
          
          <?php foreach ($proveedor as $proveedorEdit) { ?>
          <form role="form" method="PUT" action="{{ route('guardar_proveedor')}}">

            <input name="proveedorId" type="text" class="hidden" value="<?php echo $proveedorEdit->proveedorId?>">
            
          <div style="top:32px; margin-bottom: 72px;" class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><b> Eitar Proveedor: </b> <?php echo $proveedorEdit->nombre_proveedor?></h3>
            </div>

            <div class="box-body">
              <div class="row">
                <div class="col-xs-3">
                 <label for="nombre_proveedor" > Nombre Proveedor </label>
                  <input name="nombre_proveedor" type="text" class="form-control" value="<?php echo $proveedorEdit->nombre_proveedor?>">
                </div>
                <div class="col-xs-3">
                 <label for="nit" > Nit </label>
                  <input name="nit" type="text" class="form-control" value="<?php echo $proveedorEdit->nitproveedor?>">
                </div>
                <div class="col-xs-3">
                 <label for="nit" > RIF: </label>
                  <input name="rif_proveedor" type="text" class="form-control" value="<?php echo $proveedorEdit->rif_proveedor?>">
                </div>
                <div class="col-xs-3">
                 <label for="correo" > Correo </label>
                  <input name="email_proveedor" type="text" class="form-control" value="<?php echo $proveedorEdit->email?>">
                </div>
              </div>

              </br>

               <div class="row">
                 
                  <div class="col-xs-3">
                    <label for="nit"> Telefono Movil </label>
                    <input name="tel_movil_proveedor" type="text" class="form-control" value="<?php echo $proveedorEdit->tel_movil?>">
                  </div>
                  <div class="col-xs-3">
                    <label for="nit" > Telefono Local </label>
                    <input name="tel_local_proveedor" type="text" class="form-control" value="<?php echo $proveedorEdit->tel_local?>">
                  </div>
                 

               </div>
               <div class="row">
                <div class="col-xs-4">
                     <div class="form-group">
                       <label>Dirección</label>
                        <textarea name="direccion_proveedor" class="form-control" rows="8" ><?php echo $proveedorEdit->direccion?></textarea>
                      </div>
                  </div>
               <div class="col-xs-4">
                     <div class="form-group">
                       <label>Servicios</label>
                        <textarea name="servicios_proveedor" class="form-control" rows="8" ><?php echo $proveedorEdit->servicios?></textarea>
                      </div>
                  </div>

               </div>

            </div>
            <div >
            <!-- /.box-body -->
                <div  class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title"><b> Datos Bancarios de: </b> <?php echo $proveedorEdit->nombre_proveedor?></h3>
                  </div>

                  <div class="box-body">
                    <div class="row">
                      <div class="col-xs-3">
                       <label for="nombre_proveedor" > Nombre Banco</label>
                        <input name="banco_proveedor" type="text" class="form-control" value="<?php echo $proveedorEdit->banco?>">
                      </div>
                      <div class="col-xs-3">
                       <label for="nit" > Tipo Cuenta </label>
                        <input name="tipo_cuenta_proveedor" type="text" class="form-control" value="<?php echo $proveedorEdit->tipocuebanc?>">
                      </div>
                      <div class="col-xs-3">
                       <label for="nit" > Nro Cuenta: </label>
                        <input name="numero_cuenta__proveedor" type="text" class="form-control" value="<?php echo $proveedorEdit->cuebanc?>">
                      </div>
                      
                    </div> 
                  </div>
                </div>
            </div>

            </br>
            <div >
                <div  class="box box-warning">
                  <div class="box-header with-border">
                      <h3 class="box-title"><b> Datos del Representante de: </b> <?php echo $proveedorEdit->nombre_proveedor?></h3>
                  </div>


                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-3">
                         <label for="nombre_proveedor" > Nombre Representante</label>
                          <input name="nombre_repre_proveedor" type="text" class="form-control" value="<?php echo $proveedorEdit->nombre_repres?>">
                        </div>
                        <div class="col-xs-3">
                         <label for="nit" > Apellido Representante </label>
                          <input name="apellido_repre_proveedor" type="text" class="form-control" value="<?php echo $proveedorEdit->ape_repres?>">
                        </div>
                        <div class="col-xs-3">
                         <label for="nit" > Nro Cuenta: </label>
                          <input name="cuenta_repre_proveedor" type="text" class="form-control" value="<?php echo $proveedorEdit->cuebanc?>">
                        </div>

                         <div class="col-xs-3">
                            <label for="nit" > Telefono Representante </label>
                            <input name="tele_repre_proveedor"type="text" class="form-control" value="<?php echo $proveedorEdit->telmovrep?>">
                        </div>
                        
                      </div> 
                    </div>
                </div>
              </div>
              <!-- /.box -->
              </div>

              <button style="position: fixed; bottom: 104px; right: 34px;" align="rigth"  type="submit" class="btn btn-success">Guardar</button>
          </form>
           <?php } ?>

           <button style="position: fixed; bottom: 104px; right: 124px;" align="rigth"  type="submit" class="btn btn-warning">Salir</button>

    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; 2017 <a href="https://adminlte.io">SITM Muria</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



    <!-- jQuery 3 -->
<script src="{{ asset('assets/AdminLTE-2.4.0/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('assets/AdminLTE-2.4.0/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

 @yield('scripts')

 

@endsection
