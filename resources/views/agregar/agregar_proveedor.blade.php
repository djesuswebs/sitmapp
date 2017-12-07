
@extends('layouts.app')
@extends('partials.menuAdmin')
@extends('partials.menuHeader')

@section('content')

<?php 

                use App\Articulos as Articulos;
                use App\Tipoarticulos as Tipoarticulos; 
                use App\Fabricante as Fabricante;  
                use App\Tipovehiculo as Tipovehiculo;               
                 //$proveedor = Proveedor::where('nombre_proveedor','like','%OILRED S.A.%')
                //->get();

                $tipoarticulo = Tipoarticulos::all();
                $fabricante = Fabricante::all();
                $tipovehiculo= Tipovehiculo::all();

?>

<div class="wrapper">

  @yield('menuHeader')
  
  @yield('menuLateral')

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
    <section style="height: 1944px;" class="content">

      <div style="padding: 0px, 34px, 0px, 34px;!important">
          <!--<img  src="{{ URL:: asset('assets/AdminLTE-2.4.0/dist/img/CintilloSITM.png')}}"> 

          'cod_articulo', 'denominacion', 'presentacion', 'modelo', 'dentipart', 'almacenId', 'id_almacen'

          -->

      </div>

          <form  method="post" enctype="multipart/form-data" action="{{ route('agregar_proveedor')}}">

            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="usuarioId" value="{{ Auth::user()->id }}">
            
          <div style="top:32px; margin-bottom: 72px;" class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><b> Agregar Articulo</h3>
            </div>

            <div class="box-body">
              <div class="row">

              <div class="col-xs-2">
                    <label for="nit" > Nombre Proveedor </label>
                    <input name="nombre_proveedor" type="text" class="form-control" >
              </div>

                <div class="col-xs-2">
                    <label for="nit" > NIT </label>
                    <input name="nit_proveedor" type="text" class="form-control" >
                  </div>

                   <div class="col-xs-2">
                    <label for="rif_proveedor" > RIF </label>
                    <input name="rif_proveedor" type="text" class="form-control" >
                  </div>

                  <div class="col-xs-2">
                    <label for="movil_proveedor" > Telofono Movil </label>
                    <input name="movil_proveedor" type="text" class="form-control" >
                  </div>
                  <div class="col-xs-2">
                    <label for="nit" > Telefono Local </label>
                    <input name="local_proveedor" type="text" class="form-control" >
                  </div>
                  <div class="col-xs-2">
                    <label for="correo_proveedor" > Correo </label>
                    <input name="correo_proveedor" type="email" class="form-control" >
                  </div>
                
              </div>

              </br>

               <div class="row">
               <div class="col-xs-4">
                     <div class="form-group">
                       <label>Direccion</label>
                        <textarea name="direccion_proveedor" class="form-control" rows="8" ></textarea>
                      </div>
                </div>

                 <div class="col-xs-2">
                    <label for="nit" > Pagina Web</label>
                    <input name="web_proveedor" type="text" class="form-control" >
                  </div>


                <div class="col-xs-4">
                     <div class="form-group">
                       <label>Servicios</label>
                        <textarea name="servicios_proveedor" class="form-control" rows="8" ></textarea>
                      </div>
                </div>
               


                 
                  
                  
                 

               </div>

               <div class="row">
               

              </div>
            <div >
            <!-- /.box-body -->
              
            <!-- Porcentajes Incremento-->
                 <div  class="box box-warning">
                  <div class="box-header with-border">
                      <h3 class="box-title"><b> Datos Bancarios del Proveedor </b> </h3>
                  </div>

                  <div class="box-body">
                    <div class="row">
                      <div class="col-xs-2">
                       <label for="nit" > Banco </label>
                        <input name="banco_proveedor" type="text" class="form-control">
                      </div>
                      <div class="col-xs-2">
                       <label for="nit" > Tipo de Cuenta </label>
                        <input name="tipocuenta_proveedor" type="text" class="form-control">
                      </div>
                         <div class="col-xs-2">
                       <label for="nit" > Numero Cuenta </label>
                        <input name="ncuenta_proveedor" type="text" class="form-control"> %
                      </div>
                     
                    </div> 
                  </div>
                </div>
                <!-- FIn Precio de Ventas-->

                <!-- Porcentajes Incremento-->
                 <div  class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><b> Datos del Representante del Proveedor </b> </h3>
                    </div>

                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-2">
                         <label for="nit" > Cedula </label>
                          <input name="cedula_representante_proveedor" type="text" class="form-control" >
                        </div>
                        <div class="col-xs-2">
                         <label for="nit" > Nombre </label>
                          <input name="nombre_representante_proveedor" type="text" class="form-control" >
                        </div>
                        <div class="col-xs-2">
                         <label for="nit" > Apellido </label>
                          <input name="apellido_representante_proveedor" type="text" class="form-control" >
                        </div>

                        <div class="col-xs-2">
                         <label for="nit" > Telefono </label>
                          <input name="telefono_representante_proveedor" type="text" class="form-control" >
                        </div>
                       
                      </div> 
                    </div>
                </div>
                <!-- FIn Precio de Ventas-->

                


            </div>

            
              <!-- /.box -->
              </div>
              <div >

                <button style="position: fixed; bottom: 104px; right: 34px;"  type="submit" class="btn btn-success">
                    <p class="rotate">Agregar Proveedor</p>
                </button>

              </div>
          </form>
        

    
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
