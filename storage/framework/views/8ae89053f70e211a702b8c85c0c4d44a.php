<div id="staff-members" role="tabpanel" aria-labelledby="staff-members-tab">
         <div class="app-card app-card-orders-table mb-5">
             <div class="app-card-body">
                 <div class="table-responsive">
                     <table class="table mb-0 text-left">
                         <thead>
                             <tr>
                                 <th class="cell">ID</th>
                                 <th class="cell">First Name</th>
                                 <th class="cell">Last Name</th>
                                 <th class="cell">Email</th>
                                 <th class="cell">Role</th>
                                 <th class="cell">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php $__currentLoopData = $staffMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <tr>
                                     <td class="cell"><?php echo e($staff->id); ?></td>
                                     <td class="cell"><?php echo e($staff->first_name); ?></td>
                                     <td class="cell"><?php echo e($staff->last_name); ?></td>
                                     <td class="cell"><?php echo e($staff->email); ?></td>
                                     <td class="cell">
                                         <span class="badge bg-success"><?php echo e($staff->role); ?></span>
                                     </td>
                                     <td class="cell">
                                         <a class="btn-sm app-btn-secondary" href="<?php echo e(route('staff.view', $staff->id)); ?>">View</a>
                                     </td>
                                 </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </tbody>
                     </table>
                 </div><!--//table-responsive-->
             </div><!--//app-card-body-->
         </div><!--//app-card-->
     </div><!--//tab-pane-->
     <?php /**PATH /home/collins/Downloads/project/project reseach/Start/Ongoing/new/project-lander/resources/views/components/staff-table.blade.php ENDPATH**/ ?>