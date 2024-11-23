<header id="header" class="header d-flex align-items-center fixed-top bg-dark text-white">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      
      <!-- Navbar brand/logo -->
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Wastelander</h1>
      </a>

      <!-- Navbar Links -->
      {{-- <nav id="navmenu" class="navmenu">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row list-unstyled">
              <li>
                  <a href="#pricing">Pricing</a>
              </li>
              <li>
                  <a href="#contact">Contact</a>
              </li>
              <li><a href="#about">About</a></li>

               <!-- Authentication Links -->
          @if (Route::has('login'))
              
          @auth
          <li><a href="{{ url('/dashboard') }}">
                  Dashboard
              </a></li>
          @else
        <li><a href="{{ route('login') }}">
                  Log in
              </a></li>

              @if (Route::has('register'))
            <li><a href="{{ route('register') }}" >
                      Register
                  </a></li>
              @endif
          @endauth
     
  @endif
          </ul>
          
         
      </nav> --}}


      {{-- <nav id="navmenu" class="navmenu"> <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row list-unstyled"> <li> <a href="#pricing">Pricing</a> </li> <li> <a href="#contact">Contact</a> </li> <li> <a href="#about">About</a> </li>
         <!-- Authentication Links --> 
         @if (Route::has('login')) 
         @auth 
         @php $role = Auth::user()->role; $dashboardRoute = match($role) { 
            'Admin' => route('admin.dashboard'),
             'Customer' => route('customer.dashboard'), '
          Staff' => route('staff.dashboard'), 
          default => route('home') }; 
         @endphp <li> <a href="{{ $dashboardRoute }}"> Dashboard </a> </li> 
         @else <li> <a href="{{ route('login') }}"> Log in </a> </li>
          @if (Route::has('register')) <li> <a href="{{ route('register') }}"> Register </a> </li> 
          @endif
           @endauth
            @endif </ul>
         </nav> --}}


         <nav id="navmenu" class="navmenu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row list-unstyled">
                <li>
                    <a href="#pricing">Pricing</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
        
                <!-- Authentication Links -->
                @if (Route::has('login'))
                    @auth
                        @php
                            $role = Auth::user()->role;
                            $dashboardRoute = match($role) {
                                'Admin' => route('admin.dashboard'),
                                'Customer' => route('customer.dashboard'),
                                'Staff' => route('staff.dashboard'),
                                default => route('welcome')
                            };
                        @endphp
        
                        <li>
                            <a href="{{ $dashboardRoute }}">
                                Dashboard
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}">
                                Log in
                            </a>
                        </li>
        
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">
                                    Register
                                </a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </nav>
        
      
  </div>
  
</header>
