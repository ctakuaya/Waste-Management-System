<div id="customer-members" role="tabpanel" aria-labelledby="customer-members-tab">
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
                             @foreach($customers as $customer)
                                 <tr>
                                     <td class="cell">{{ $customer->id }}</td>
                                     <td class="cell">{{ $customer->first_name }}</td>
                                     <td class="cell">{{ $customer->last_name }}</td>
                                     <td class="cell">{{ $customer->email }}</td>
                                     <td class="cell">
                                         <span class="badge bg-success">{{ $customer->role }}</span>
                                     </td>
                                     <td class="cell">
                                         <a class="btn-sm app-btn-secondary" href="{{ route('customers.view', $customer->id) }}">View</a>
                                     </td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div><!--//table-responsive-->
             </div><!--//app-card-body-->
         </div><!--//app-card-->
     </div><!--//tab-pane-->
     