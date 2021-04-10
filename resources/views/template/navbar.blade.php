<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto control">
      <li class="nav-item d-none d-sm-inline-block">

      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('logout') }}" onclick="
          event.preventDefault();
          document.getElementById('logout-form').submit();">
          <button class='btn'><i class="fas fa-sign-out-alt"></i></button>
        </a>
      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}
      </form>
    </ul>
  </nav>