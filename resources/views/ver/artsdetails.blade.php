
@extends('layouts.app')
@extends('partials.menuAdmin')
@extends('partials.menuHeader')

@section('content')

<?php 

                use App\Articulos as Articulos;
                use App\Almacen as Almacen;
                use App\Tipoarticulos as Tipoarticulos; 
                use App\Fabricante as Fabricante; 
                use App\Tipovehiculo as Tipovehiculo;
                use App\Proveedor as Proveedor;
                                 //$proveedor = Proveedor::where('nombre_proveedor','like','%OILRED S.A.%')
                //->get();

                $tipoarticulo = Tipoarticulos::all();
                $fabricante = Fabricante::all();
                $proveedor = Proveedor::all();
                $tipovehiculo= Tipovehiculo::all();
                $almacen= Almacen::all();

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
          -->

      </div>
  
          
          <?php foreach ($articulo as $articuloEdit) { ?>

         

            <?php echo $articuloEdit->cod_articulo?>
            <?php echo $articuloEdit->id_articulo?>
          
            
          <div style="top:32px; margin-bottom: 72px;" class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><b> Eitando Articulo: </b> <?php echo $articuloEdit->denominacion?></h3>
            </div>

            <div class="box-body">
              <div class="row">

                <div class="col-xs-4">
                      <div class="form-group">

                      <?php if ($articuloEdit->img_articulo == NULL) {?>
                       <img height="143" width="143" src="../../../public/storage/articulos_default.png" class="img-circle" alt="Imagen Articulo ">
                      <?php } else {?>
                      <img height="143" width="143" src="../../../public/storage/<?php echo $articuloEdit->img_articulo?>" class="img-circle" alt="Imagen Articulo ">
                      <?php } ?>
                      <br>

                       
                      </div>
                </div>

                <div class="col-xs-3">
                 <label for="nombre_articulo" > Nombre Articulo </label>
                <?php echo $articuloEdit->denominacion?>
                </div>
                <div class="col-xs-2">
                 <label for="nit" > Código </label>
                  <?php echo $articuloEdit->cod_articulo?>
                </div>
                <div class="col-xs-2">
                 <label for="fecha_creacion_articulo" > Fecha de Creacion </label>
                  

                   <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>

                  <?php echo $articuloEdit->feccreart?>
                </div>
                </div>

                 <div class="col-xs-3">
                 <label for="fecha_creacion_articulo" > Modelo </label>
                  <?php echo $articuloEdit->modelo?>
                </div>
                
              </div>

              </br>

               <div class="row">
               <div class="col-xs-4">
                     <div class="form-group">
                       <label>Descripcion</label>
                        <?php echo $articuloEdit->descripcion?>
                      </div>
                  </div>
                 <!-- Tipo Articulo -->
                  <div class="col-xs-4">
                      <div class="form-group">
                        <label>Tipo de Articulo</label>
                          <?php 

                            $tipoarticulo_especifico= Tipoarticulos::where('tipo_articulo_id','=', $articuloEdit->tipo_articulo_id)->get();


                              foreach ($tipoarticulo_especifico as $especifico) {
                          ?> 
                     <?php echo $especifico->dentipart?>

                          <?php } ?>


                         
                      </div>
                  </div>


                  <div class="col-xs-2">
                    <label for="nit" > Existencia Actual </label>
                    <?php echo $articuloEdit->exiactart?>
                  </div>

                   <div class="col-xs-2">
                    <label for="nit" > Existencia Inicial </label>
                   <?php echo $articuloEdit->exiiniart?>
                  </div>
                 
                   <div class="col-xs-2">
                    <label for="nit" > Minimo </label>
                   <?php echo $articuloEdit->minart?>
                  </div>

                   <div class="col-xs-2">
                    <label for="nit" > Máximo </label>
                    <?php echo $articuloEdit->maxart?>
                  </div>

                  <!-- Tipo Articulo -->
                  <div class="col-xs-4">
                      <div class="form-group">
                        <label>Fabricantes</label>
                     
                         <?php 

                            $fabricante_especifico= Fabricante::where('fabricanteId','=', $articuloEdit->fabricante_id)->get();


                              foreach ($fabricante_especifico as $especifico_fabricante) {
                          ?> 
                         <?php echo $especifico_fabricante->denefabricante?>

                          <?php } ?>

                          
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
                      <h3 class="box-title"><b> Porcentajes de Incremento </b> </h3>
                  </div>

                   <div class="col-xs-2">
                         <label for="nit" > Costo Unitario </label>
                          <?php echo $articuloEdit->costounitario?>
                        </div>

                  <div class="box-body">
                    <div class="row">
                      <div class="col-xs-2">
                       <label for="nit" > Porcentaje A </label>
                        <?php echo $articuloEdit->incpora?>
                      </div>
                      <div class="col-xs-2">
                       <label for="nit" > Porcentaje B </label>
                        <?php echo $articuloEdit->incporb?>
                      </div>
                         <div class="col-xs-2">
                       <label for="nit" > Porcentaje C </label>
                      <?php echo $articuloEdit->incporc?>
                      </div>
                     
                    </div> 
                  </div>
                </div>
                <!-- FIn Precio de Ventas-->

                <!-- Porcentajes Incremento-->
                 <div  class="box box-success">
                  <div class="box-header with-border">
                      <h3 class="box-title"><b> Precio de Ventas </b> </h3>
                  </div>

                  <div class="box-body">
                    <div class="row">
                      <div class="col-xs-2">
                       <label for="nit" > Precio Venta A </label>
                        <?php echo $articuloEdit->precioventaa?>
                      </div>
                      <div class="col-xs-2">
                       <label for="nit" > Precio Venta B </label>
                        <?php echo $articuloEdit->precioventab?>
                      </div>
                         <div class="col-xs-2">
                       <label for="nit" > Precio Venta C </label>
                            <?php echo $articuloEdit->precioventac?>
                      </div>
                     
                    </div> 
                  </div>
                </div>
                <!-- FIn Precio de Ventas-->

                
                

                  <!--  Tipos Vehiculos -->
                 <div  class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title"><b> Tipo Vehiculo </b> </h3>
                  </div>

                  <div class="box-body">
                    <div class="row">

                     <div class="col-xs-4">
                      <div class="form-group">
                        <label></label>
                      
                         <?php 

                            $tipovehiculo_especifico= Tipovehiculo::where('idtipovehiculo','=', $articuloEdit->tipovehiculoId)->get();


                              foreach ($tipovehiculo_especifico as $especifico_tipovehiculo) {
                          ?> 
                          <?php echo $especifico_tipovehiculo->marcavehiculo.' - Modelo:'.$especifico_tipovehiculo->modelovehiculo.' - Desde el año: '.$especifico_tipovehiculo->anovehiculo.' hasta el Año '.$especifico_tipovehiculo->anovehdos.' - Cilindraje: '.$especifico_tipovehiculo->cilindraje?>
                         

                          <?php } ?>
                          
                       
                      </div>
                  </div>
                    </div> 
                  </div>
                </div>
                <!-- Fin Tipos Vehiculos -->

               

                <!--  Ubicacion en Almacen -->
                 <div  class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><b> Ubicación dentro de Almacen </b> </h3>
                    </div>

                    <div class="box-body">
                      <div class="row">
                        <div class="col-xs-4">
                        <div class="form-group">
                          <label>Almacen</label>
                        
                            <?php 

                                $almacen_especifico= Almacen::where('id_almacen','=', $articuloEdit->almacenId)->get();


                                  foreach ($almacen_especifico as $especifico_almacen) {
                              ?> 
                           
                                <?php echo $especifico_almacen->denalmacen?>
                            

                              <?php } ?>

                          </select>
                        </div>
                      </div>

                    

                        <div class="col-xs-2">
                         <label for="nit" > Puesto </label>
                          <?php echo $articuloEdit->puesto?>
                        </div>


                     
                       
                      </div>
                      
                       <div class="row">
                        <div class="col-xs-2">
                          <div class="form-group">
                            <label>Proveedor</label>
                         
                              <?php 

                                $proveedor_especifico= Proveedor::where('proveedorId','=', $articuloEdit->proveedorId)->get();


                                  foreach ($proveedor_especifico as $especifico_proveedor) {
                              ?> 
                           
                                <?php echo $especifico_proveedor->nombre_proveedor?>
                             

                              <?php } ?>

                           

                          </div>
                        </div>
                      </div> 
                    </div>
                </div>
                <!--Fin  Ubicacion en Almacen -->

            </div>

            
              <!-- /.box -->
              </div>
              <div >


              </div>
       
        <?php } ?>

    
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
