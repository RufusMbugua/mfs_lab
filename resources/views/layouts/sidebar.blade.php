<!--sidebar panel-->
      <div class="off-canvas-overlay" data-toggle="sidebar"></div>
      <div class="sidebar-panel">
        <div class="brand">
          <!-- toggle offscreen menu -->
          <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen hidden-lg-up">
            <i class="material-icons">menu</i>
          </a>
          <!-- /toggle offscreen menu -->
          <!-- logo -->
          <a class="brand-logo">
            <img class="expanding-hidden" src="{{asset("images/logo.png")}}" alt=""/>
          </a>
          <!-- /logo -->
        </div>
        <div class="nav-profile dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <div class="user-image">
              <img src="{{asset("images/avatar.jpg")}}" class="avatar img-circle" alt="user" title="user"/>
            </div>
            <div class="user-info expanding-hidden">
              Betty Simmons
              <small class="bold">Administrator</small>
            </div>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:;">Settings</a>
            <a class="dropdown-item" href="javascript:;">Upgrade</a>
            <a class="dropdown-item" href="javascript:;">
              <span>Notifications</span>
              <span class="tag bg-primary">34</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:;">Help</a>
            <a class="dropdown-item" href="">Logout</a>
          </div>
        </div>
        <!-- main navigation -->
        <nav>
          <p class="nav-title">NAVIGATION</p>
          <ul class="nav">
            <!-- dashboard -->
            <li>
              <a href="{{ url('/') }}">
                <i class="material-icons text-primary">home</i>
                <span>Home</span>
              </a>
            </li>
            <li>
              <a href="{{ route('customers.list') }}">
                <i class="material-icons text-warning">person</i>
                <span>Customers</span>
              </a>
            </li>
            <li>
              <a href=" {{ route('loans.list') }}">
                <i class="material-icons text-success">attach_money</i>
                <span>Loans</span>
              </a>
            </li>
            <!-- /dashboard -->
            
          </ul>
          
        </nav>
        <!-- /main navigation -->
      </div>
      <!-- /sidebar panel -->