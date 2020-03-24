  <nav class="main-header navbar navbar-expand navbar-white navbar-light float-center" style="margin: 0px; background-color: sienna">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li> --}}
      <li class="nav-item  d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Total</a>
      </li>
      <li class="nav-item d-sm-inline-block">
        <a href="{{ route('world-wide') }}" class="nav-link">WorldWide</a>
      </li>
      <li class="nav-item d-sm-inline-block">
        <a href="{{ route('prevention') }}" class="nav-link">Prevention</a>
      </li>
    </ul>
  </nav>
  <style>
      .navbar-light .navbar-nav .nav-link{
          color: beige;
      }
  </style>