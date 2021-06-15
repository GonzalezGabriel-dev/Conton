<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #10aded">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="border-color: #10aded;">
      <!--<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
      <div align="center" >
      <img src="{{asset('/logo2.png')}}" height="55px"  alt="logo">
    
      <img src="{{asset('/logo3.png')}}" height="55px"  alt="logo">
      
      </div>
     
   

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-color: #10aded;">
        <div class="image">
         <img src="{{asset('/usuarios/'.Auth::user()->image_profile)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" aling="center">
          <a href="#" class="d-block" aling="center" style="color: white">
          {{ Auth::user()->name }}
          <br>
          {{ Auth::user()->email }}
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="/admin" class="nav-link" style="color: white">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          @if(Auth::user()->level=="cliente")
          <li class="nav-item">
            <a href="/admin/pedidoCliente" class="nav-link" style="color: white">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Pedidos
              </p>
            </a>
          </li>
          @endif
          @if(Auth::user()->level=="admin")
          <li class="nav-item">
            <a href="admin/productos" class="nav-link" style="color: white">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Productos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin/pedidos" class="nav-link" style="color: white">
            <i class="nav-icon fas fa-store"></i>
              <p>
                Pedidos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin/ventas" class="nav-link" style="color: white">
            <i class="nav-icon fas fa-boxes"></i>
              <p>
                Ventas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin/usuarios" class="nav-link" style="color: white">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: white">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>