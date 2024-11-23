<x-app-layout>
         <x-slot name="header">
             <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                 {{ __('View Staff Member') }}
             </h2>
         </x-slot>
     
         <div class="py-12">
             <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                 <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                     <div class="p-6 text-gray-900">
                         <h1>Staff Member Details</h1>
                         <div class="mb-3">
                             <strong>ID:</strong> {{ $staff->id }}
                         </div>
                         <div class="mb-3">
                             <strong>First Name:</strong> {{ $staff->first_name }}
                         </div>
                         <div class="mb-3">
                             <strong>Last Name:</strong> {{ $staff->last_name }}
                         </div>
                         <div class="mb-3">
                             <strong>Email:</strong> {{ $staff->email }}
                         </div>
                         <div class="mb-3">
                             <strong>Role:</strong> {{ $staff->role }}
                         </div>
                         <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
                     </div>
                 </div>
             </div>
         </div>
     </x-app-layout>
     