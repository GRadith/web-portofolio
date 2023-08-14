  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><img src="Kelly/assets/img/radith-logo.png" class="w-100"></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
          <li><a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
          <li><a class="{{ request()->is('service') ? 'active' : '' }}" href="{{ route('service') }}">Services</a></li>
          <li><a class="{{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>

  </header>