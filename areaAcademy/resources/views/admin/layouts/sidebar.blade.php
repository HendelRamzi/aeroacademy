  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('admin.dashboard')}}" class="nav-link">
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header">ADMINISTRATION</li>
          
          <li class="nav-item">
            <a class="nav-link" style="cursor: pointer">
              <p>
                Formations
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.formations.index')}}" class="nav-link">
                  <p>Liste des formations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.formations.create')}}" class="nav-link">
                  <p>Créé une formation</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="cursor: pointer">
              <p>
                Contacts
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.contacts.index')}}" class="nav-link">
                  <p>Liste des contacts</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="cursor: pointer">
              <p>
                Inscriptions
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.inscriptions.index')}}" class="nav-link">
                  <p>Liste des inscriptions</p>
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
