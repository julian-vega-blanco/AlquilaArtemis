
<aside class="main-sidebar sidebar-dark-green elevation-4">
    <!-- Brand Logo -->
    <a href="/AlquilaArtemis" class="brand-link navbar-green">
      <img src="views/assets/img/download.jpeg"  alt="chamoy" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Alquila Artemis</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/img/download.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/AlquilaArtemis" class="d-block">Chamoy</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
               <a href="/AlquilaArtemis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
               </li>
               <li class="nav-item">
               <a href="/AlquilaArtemis/clientesIngreso" class="nav-link <?php if ($routerArray[2]=="clientesIngreso"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes Ingreso</p>
                </a>
               </li>
               <li class="nav-item">
               <a href="/AlquilaArtemis/empleadosIngreso" class="nav-link <?php if ($routerArray[2]=="empleadosIngreso"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empleados Ingreso</p>
                </a>
               </li>
               <li class="nav-item">
               <a href="/AlquilaArtemis/obrasIngreso" class="nav-link <?php if ($routerArray[2]=="obrasIngreso"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Obras Ingreso</p>
                </a>
               </li>
               <li class="nav-item">
               <a href="/AlquilaArtemis/productosIngreso" class="nav-link <?php if ($routerArray[2]=="productosIngreso"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos Ingreso</p>
                </a>
               </li>
               <li class="nav-item">
               <a href="/AlquilaArtemis/ingresoSalida" class="nav-link <?php if ($routerArray[2]=="ingresoSalida"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salida Ingreso</p>
                </a>
               </li>
               <li class="nav-item">
               <a href="/AlquilaArtemis/ingresoSalidaDetalle" class="nav-link <?php if ($routerArray[2]=="ingresoSalidaDetalle"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salida detalle Ingreso</p>
                </a>
               </li>
               <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Formularios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/AlquilaArtemis/empleado" class="nav-link <?php if ($routerArray[2]=="empleado"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empleados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AlquilaArtemis/producto" class="nav-link <?php if ($routerArray[2]=="producto"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AlquilaArtemis/cliente" class="nav-link <?php if ($routerArray[2]=="cliente"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AlquilaArtemis/obra" class="nav-link <?php if ($routerArray[2]=="obra"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Obras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AlquilaArtemis/salida" class="nav-link <?php if ($routerArray[2]=="salida"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salidas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AlquilaArtemis/salidaDetalle" class="nav-link <?php if ($routerArray[2]=="salidaDetalle"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salidas detalle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AlquilaArtemis/alquilar" class="nav-link <?php if ($routerArray[2]=="alquiler"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Alquiler</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AlquilaArtemis/devolucion" class="nav-link <?php if ($routerArray[2]=="devolucion"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Devoluciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AlquilaArtemis/liquidacion" class="nav-link <?php if ($routerArray[2]=="liquidacion"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liquidaciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/AlquilaArtemis/inventarios" class="nav-link <?php if ($routerArray[2]=="inventarios"): ?> active <?php endif ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inventarios</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>