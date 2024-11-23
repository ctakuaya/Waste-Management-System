
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Portal - User Registration</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - User Registration">
    <meta name="author" content="Your Company">    
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">

    <!-- FontAwesome JS-->
    <script defer src="<?php echo e(asset('assets/plugins/fontawesome/js/all.min.js')); ?>"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo e(asset('css/portal.css')); ?>">
</head> 

<body class="app app-signup p-0">            
    <div class="row g-0 app-auth-wrapper">
             <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
                      <div class="d-flex flex-column align-content-end">
                               <div class="app-auth-body mx-auto">      
                                        
                                             <h2 class="auth-heading text-center mb-4">Sign up to Portal</h2>                                            
         
                                             <div class="auth-form-container text-start mx-auto">
                                                      <form class="auth-form auth-signup-form" method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo csrf_field(); ?>

                            <!-- First Name -->
                                                               <div class="mb-3">
                                                                        <label for="first_name" class="form-label">First Name</label>
                                                                        <input id="first_name" name="first_name" type="text" class="form-control" value="<?php echo e(old('first_name')); ?>" required autofocus>
                                                                        <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                                    <span class="text-danger"><?php echo e($message); ?></span> 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                               </div>

                            <!-- Last Name -->
                                                               <div class="mb-3">
                                                                        <label for="last_name" class="form-label">Last Name</label>
                                                                        <input id="last_name" name="last_name" type="text" class="form-control" value="<?php echo e(old('last_name')); ?>" required>
                                                                        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                                    <span class="text-danger"><?php echo e($message); ?></span> 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                               </div>

                            <!-- Address -->
                                                               <div class="mb-3">
                                                                        <label for="address" class="form-label">Address</label>
                                                                        <input id="address" name="address" type="text" class="form-control" value="<?php echo e(old('address')); ?>" required>
                                                                        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                                    <span class="text-danger"><?php echo e($message); ?></span> 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                               </div>

                            <!-- Phone Number -->
                                                               <div class="mb-3">
                                                                        <label for="phone_number" class="form-label">Phone Number</label>
                                                                        <input id="phone_number" name="phone_number" type="text" class="form-control" value="<?php echo e(old('phone_number')); ?>" required>
                                                                        <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                                    <span class="text-danger"><?php echo e($message); ?></span> 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                               </div>

                            <!-- Role -->
                                                               <div class="mb-3">
                                                                        <label for="role" class="form-label">Role</label>
                                                                        <select id="role" name="role" class="form-select">
                                    <option value="Customer" <?php echo e(old('role') == 'Customer' ? 'selected' : ''); ?>>Customer</option>
                                    <option value="Admin" <?php echo e(old('role') == 'Admin' ? 'selected' : ''); ?>>Admin</option>
                                    <option value="Staff" <?php echo e(old('role') == 'Staff' ? 'selected' : ''); ?>>Staff</option>
                                </select>
                                                                        <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                                    <span class="text-danger"><?php echo e($message); ?></span> 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                               </div>

                            <!-- Email -->
                                                               <div class="mb-3">
                                                                        <label for="email" class="form-label">Email</label>
                                                                        <input id="email" name="email" type="email" class="form-control" value="<?php echo e(old('email')); ?>" required>
                                                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                                    <span class="text-danger"><?php echo e($message); ?></span> 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                               </div>

                            <!-- Password -->
                                                               <div class="mb-3">
                                                                        <label for="password" class="form-label">Password</label>
                                                                        <input id="password" name="password" type="password" class="form-control" required>
                                                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                                    <span class="text-danger"><?php echo e($message); ?></span> 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                               </div>

                            <!-- Confirm Password -->
                                                               <div class="mb-3">
                                                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                                                        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" required>
                                                                        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                                    <span class="text-danger"><?php echo e($message); ?></span> 
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                               </div>

                            <!-- Terms and Conditions -->
                                                               <div class="extra mb-3">
                                                                        <div class="form-check">
                                                                                 <input class="form-check-input" type="checkbox" id="terms" required>
                                                                                 <label class="form-check-label" for="terms">
                                                                                          I agree to the <a href="#" class="app-link">Terms of Service</a> and <a href="#" class="app-link">Privacy Policy</a>.
                                                                                 </label>
                                                                        </div>
                                                               </div>
                                                               
                                                               <div class="text-center">
                                                                        <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
                                                               </div>
                                                      </form>
                                                      
                                                      <div class="auth-option text-center pt-5">Already have an account? 
                            <a class="text-link" href="<?php echo e(route('login')); ?>">Log in</a>
                        </div>
                                             </div><!--//auth-form-container-->                                      
                               </div><!--//auth-body-->
                      </div><!--//flex-column-->   
             </div><!--//auth-main-col-->
             
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
                      <div class="auth-background-holder"></div>
                      <div class="auth-background-mask"></div>
                      <div class="auth-background-overlay p-3 p-lg-5">
                               <div class="d-flex flex-column align-content-end h-100">
                                        <div class="h-100"></div>
                                        <div class="overlay-content p-3 p-lg-4 rounded">
                                                 <h5 class="mb-3 overlay-title">Welcome to Portal</h5>
                                                 <div>Explore the features of Portal by signing up.</div>
                                        </div>
                                    </div>
                      </div><!--//auth-background-overlay-->
             </div><!--//auth-background-col-->
    </div><!--//row-->
</body>
</html>
<?php /**PATH /home/collins/Downloads/project/project reseach/Start/Ongoing/new/project-lander/resources/views/auth/register.blade.php ENDPATH**/ ?>