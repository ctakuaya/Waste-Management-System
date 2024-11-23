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
                             @foreach($staffMembers as $staff)
                                 <tr>
                                     <td class="cell">{{ $staff->id }}</td>
                                     <td class="cell">{{ $staff->first_name }}</td>
                                     <td class="cell">{{ $staff->last_name }}</td>
                                     <td class="cell">{{ $staff->email }}</td>
                                     <td class="cell">
                                         <span class="badge bg-success">{{ $staff->role }}</span>
                                     </td>
                                     <td class="cell">
                                         <a class="btn-sm app-btn-secondary" href="{{ route('staff.view', $staff->id) }}">View</a>
                                     </td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div><!--//table-responsive-->
             </div><!--//app-card-body-->
         </div><!--//app-card-->
     </div><!--//tab-pane-->
     