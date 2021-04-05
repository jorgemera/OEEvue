<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-1">
    <!-- Brand Logo -->
  

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-8 d-flex" style="margin-top:20%; postion:center;">
        <div class="info">
          <a href="#" style="margin-top:50%;" class="d-block">Nombre de usuario</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      
          <li class="nav-item has-treeview"  @click="menu=1">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-industry"></i>
              <p>
                OEE               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview" @click="menu=2">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bell"></i>
              <p>
                Alarmas           
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview"  @click="menu=3">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Reportes               
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview"  >
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                 Administración
                 <i class="fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" @click="menu=5">
                <a href="#" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li  class="nav-item" @click="menu=6">
                <a href="#" class="nav-link">
                  <i class="fa fa-cog nav-icon"></i>
                  <p>Simulación</p>                
                </a>

                <ul class="nav nav-treeview">
              
              
            </ul> 
              </li>
              
            </ul> 
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
