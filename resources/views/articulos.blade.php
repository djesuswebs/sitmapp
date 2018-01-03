@extends('layouts.app')

@extends('partials.menuAdmin')
@extends('partials.menuHeader')

@section('content')
<?php 
               
                use App\Articulos as Articulos;
                //$articulos = Articulos::all();

            $articulos =  DB::table('articulos')
                ->join('tipoarticulos', 'articulos.tipo_articulo_id', '=', 'tipoarticulos.tipo_articulo_id')
                ->join('almacens', 'articulos.almacenId', '=', 'almacens.id_almacen')
                ->join('fabricantes', 'articulos.fabricante_id', '=', 'fabricantes.fabricanteId')
              ->select('articulos.*', 'tipoarticulos.*','almacens.*','fabricantes.*')
            ->get();


?>

<div class="wrapper">

  @yield('menuHeader')
 
  @yield('menuLateral')

  <!-- Content Wrapper. Contains page content -->
  <div  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section  class="content-header">
      <!--<h1>
        SITM
        <small>Panel Principal</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section  class="content">

      <!--  <div style="padding: 0px, 34px, 0px, 34px;!important">
        <img  src="{{ URL:: asset('assets/AdminLTE-2.4.0/dist/img/CintilloSITM.png')}}">

      </div>-->

         <div style="top:32px" class="box">
            <div class="box-header">
              <h3 class="box-title">LISTA DE ARTICULOS</h3>
              <a style="left: 34px; width: 10%; z-index: 2;" href="/agregar_articulo" class="btn btn-block btn-danger">Agregar Articulo</a>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="listaarticulos" class="table table-bordered ">
                <thead>
                <tr>
                  <th></th>
                  <th width="4">CÓDIGO</th>
                  <th>Nombre</th>
                  
                  <th>Tipo</th>
                  <th>Fabricante</th>
                  <th>Existencia</th>
                  <th>Estante</th>
                  <th>Precio 1</th>
                  <th>Precio 2</th>
                  <th>Puesto</th>
                  <th> Acciones</th>
                </tr>
                </thead>
                <tbody>

                     @foreach($articulos as $articulosView)
                      <tr>
                        <td>

                        <?php if ($articulosView->img_articulo == NULL) {?>
                           
                                <img height="43" width="43" src="../../../public/storage/articulos_default.png" class="img-circle"  alt="Imagen Articulo ">
                           
                        <?php } else {?>
                         
                            <img height="43" width="43" src="../../../public/storage/{{$articulosView->img_articulo}}" data-toggle="modal" data-target="#{{$articulosView->id_articulo}}" class="img-circle myBtn_{{ $articulosView->id_articulo }}" id="myBtn_{{ $articulosView->id_articulo }}"  alt="Imagen Articulo ">

                        <?php } ?> </td>
                        	<td width="2">{{ $articulosView->cod_articulo }} </td>
                       
                         <td>
                          
                        <?php echo $articulosView->denominacion;
                                 //$nombreArticulo =  $articulosView->denominacion;
                                 //if (strlen($nombreArticulo) > 20) {
                                      //$Contenido = substr( $nombreArticulo, 0, 20) .'<span id="tooltip-events" class="tooltipstered"  title="'.$articulosView->denominacion.'">...</span>';
                                  //} //else {
                                      //$Contenido =  $nombreArticulo . '<span id="tooltip-events" class="tooltipstered"  title="'.$articulosView->denominacion.'">...</span>';
                                  //} 
                              
                                //echo '<span  id="tooltip-events" class="tooltipstered"  title="'.$articulosView->denominacion.'">'.$Contenido.'</span>';
                              ?>
                        </td>
                       
                        <td>{{ $articulosView->dentipart}} </td>
                        <td>{{ $articulosView->denefabricante}} </td>
                        <td >{{ $articulosView->exiactart}}</td>
                        <td>{{ utf8_encode($articulosView->denalmacen)}}</td>
                        <td>{{ $articulosView->precioventaa}}</td>
                        <td>{{ $articulosView->precioventab}}</td>
                        <td>{{ $articulosView->puesto}}</td>
                        <td>
                          <a href="/actualizar_articulo/{{$articulosView->id_articulo}}">
                             <i id="tooltip-events" title="Editar Articulo" class="fa fa-fw fa-pencil"></i> 
                          </a>

                           <a href="/ver/{{$articulosView->id_articulo}}">
                             <i id="tooltip-events" title="Ver Articulo" class="fa fa-fw fa-pencil"></i> 
                          </a>

                          
                        </td>
       
                      </tr>

                     


                      <!--MODAL IMAGEN -->
                      <div class="modal fade" id="{{ $articulosView->id_articulo }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div style="width: 815px; height: 611px;"  class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Imagen de Articulo: {{ $articulosView->cod_articulo.' - ' }}
                                <?php  
                                  $nombreArticulo =  $articulosView->denominacion;
                                    if (strlen($nombreArticulo) > 20) {
                                      
                                      $Contenido = substr( $nombreArticulo, 0, 30) .'<span id="tooltip-events" class="tooltipstered"  title="'.$articulosView->denominacion.'">...</span>';
                                                          }
                                      else {
                                          $Contenido =  $nombreArticulo . '<span id="tooltip-events " class="tooltipstered"  title="'.$articulosView->denominacion.'">...</span>';
                                      } 
                                                      
                                  echo '<span  id="tooltip-events" style="background-color: #B9E1EE; padding: 4px 12px 4px 12px;" class="tooltipstered"  title="'.$articulosView->denominacion.'">'.$Contenido.'</span>';
                                ?>
                                  
                              </h4>
                            </div>
                            <div   class="modal-body">
                              
                              <?php if ($articulosView->img_articulo == NULL) {?>
                                                
                                <img style="margin:0 auto;" height="411" width="515" src="../../../public/storage/articulos_default.png" class="" data-toggle="modal" data-target="#myModal" alt="Imagen Articulo ">
                                                 
                              <?php } else {?>
                                               
                                <img  height="411" width="715" src="../../../public/storage/{{$articulosView->img_articulo}}" data-toggle="modal" data-target="#myModal" class="" alt="Imagen Articulo ">

                              <?php } ?>

                            </div>
                            <div style="background: #3c8dbc;" class="modal-footer">
                              <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Trigger/Open The Modal -->

<script>
$('.openBtn').on('click',function(){
    $('.modal-body').load('getContent.php?id=2',function(){
        $('#myModal').modal({show:true});
    });
});
</script>


                      @endforeach


                </tbody>
             
              </table>
            </div>
            <!-- /.box-body -->
          </div>

     


         

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

<script src="/js/laravel-delete.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
    var table2 = $('#listaarticulos').DataTable( {
        responsive: false,
        paging: true,
        bDeferRender: true
    } );
 
} );
  </script>


 @yield('scripts')




 

@endsection
