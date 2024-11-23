<header id="header" class="header d-flex align-items-center fixed-top bg-dark text-white">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      
      <!-- Navbar brand/logo -->
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Wastelander</h1>
      </a>

      <!-- Navbar Links -->
      


      


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
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <?php
                            $role = Auth::user()->role;
                            $dashboardRoute = match($role) {
                                'Admin' => route('admin.dashboard'),
                                'Customer' => route('customer.dashboard'),
                                'Staff' => route('staff.dashboard'),
                                default => route('welcome')
                            };
                        ?>
        
                        <li>
                            <a href="<?php echo e($dashboardRoute); ?>">
                                Dashboard
                            </a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo e(route('login')); ?>">
                                Log in
                            </a>
                        </li>
        
                        <?php if(Route::has('register')): ?>
                            <li>
                                <a href="<?php echo e(route('register')); ?>">
                                    Register
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </nav>
        
      
  </div>
  
</header>
<?php /**PATH /home/collins/Downloads/project/project reseach/Start/Ongoing/new/project-lander/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>