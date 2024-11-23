<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">

    <!-- FontAwesome JS-->
    <script defer src="<?php echo e(asset('plugins/fontawesome/js/all.min.js')); ?>"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo e(asset('css/portal.css')); ?>">
</head>

<body class="">
    <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <!-- Buttons to toggle tables -->
        <div class="app-wrapper mb-4">
            <button id="toggleStaffTable" class="btn font-bold py-2 px-4 rounded" 
                style="border: 2px solid darkgreen; margin-right: 10px;">
                Show Staff Table
            </button>
            <button id="toggleCustomerTable" class="btn font-bold py-2 px-4 rounded" 
                style="border: 2px solid darkgreen;">
                Show Customer Table
            </button>
        </div>

        <!-- Staff table component -->
        <div id="staffTableContainer" style="display: none;">
            <?php if (isset($component)) { $__componentOriginal9a7aa4cf67f56064db57fb263e0a4263 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9a7aa4cf67f56064db57fb263e0a4263 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.staff-table','data' => ['staffMembers' => $staffMembers]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('staff-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['staffMembers' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($staffMembers)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9a7aa4cf67f56064db57fb263e0a4263)): ?>
<?php $attributes = $__attributesOriginal9a7aa4cf67f56064db57fb263e0a4263; ?>
<?php unset($__attributesOriginal9a7aa4cf67f56064db57fb263e0a4263); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9a7aa4cf67f56064db57fb263e0a4263)): ?>
<?php $component = $__componentOriginal9a7aa4cf67f56064db57fb263e0a4263; ?>
<?php unset($__componentOriginal9a7aa4cf67f56064db57fb263e0a4263); ?>
<?php endif; ?>
        </div>

        <!-- Customer table component -->
        <div id="customerTableContainer" style="display: none;">
            <?php if (isset($component)) { $__componentOriginalf6f6ee4c6c5846dd7981c3777508db2b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf6f6ee4c6c5846dd7981c3777508db2b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.customer-table','data' => ['customers' => $customers]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('customer-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['customers' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($customers)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf6f6ee4c6c5846dd7981c3777508db2b)): ?>
<?php $attributes = $__attributesOriginalf6f6ee4c6c5846dd7981c3777508db2b; ?>
<?php unset($__attributesOriginalf6f6ee4c6c5846dd7981c3777508db2b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6f6ee4c6c5846dd7981c3777508db2b)): ?>
<?php $component = $__componentOriginalf6f6ee4c6c5846dd7981c3777508db2b; ?>
<?php unset($__componentOriginalf6f6ee4c6c5846dd7981c3777508db2b); ?>
<?php endif; ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

    <!-- Javascript -->
    <script src="<?php echo e(asset('assets/plugins/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/chart.js/chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/index-charts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('toggleStaffTable').addEventListener('click', function() {
                var staffTableContainer = document.getElementById('staffTableContainer');
                if (staffTableContainer.style.display === 'none') {
                    staffTableContainer.style.display = 'block';
                    this.textContent = 'Hide Staff Table';
                } else {
                    staffTableContainer.style.display = 'none';
                    this.textContent = 'Show Staff Table';
                }
            });

            document.getElementById('toggleCustomerTable').addEventListener('click', function() {
                var customerTableContainer = document.getElementById('customerTableContainer');
                if (customerTableContainer.style.display === 'none') {
                    customerTableContainer.style.display = 'block';
                    this.textContent = 'Hide Customer Table';
                } else {
                    customerTableContainer.style.display = 'none';
                    this.textContent = 'Show Customer Table';
                }
            });
        });
    </script>
</body>

</html>
<?php /**PATH /home/collins/Downloads/project/project reseach/Start/Ongoing/new/project-lander/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>