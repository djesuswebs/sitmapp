

@section('menuLateral')

<!-- Left side column. contains the logo and sidebar -->
  <aside style="position: fixed;" class="main-sidebar navbar-fixed"">
    <!-- sidebar: style can be found in sidebar.less -->
    <section  class="sidebar" >
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
            <li><a href="/tipoarticulos"><i class="fa fa-circle-o"></i> Tipos de Articulos</a></li>
            <li><a href="/almacen"><i class="fa fa-circle-o"></i> Almacenes</a></li>
            <li><a href="/fabricantes"><i class="fa fa-circle-o"></i> Fabricantes</a></li>
            <li><a href="/tipovehiculo"><i class="fa fa-circle-o"></i> Tipos de Vehiculos</a></li>
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
        <li><a href=""><i class="fa fa-ship"></i> <span>Servicios</span></a></li>
        <li><a href=""><i class="fa fa-refresh"></i> <span>Arctualizar Vehiculos</span></a></li>
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

  @show