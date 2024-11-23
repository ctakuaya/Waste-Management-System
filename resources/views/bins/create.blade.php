
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="h5">Add New Bin</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('bins.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="location_name" class="form-label">Location Name</label>
                                <input type="text" class="form-control" id="location_name" name="location_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="latitude" class="form-label">Latitude</label>
                                <input type="text" class="form-control" id="latitude" name="latitude" required>
                            </div>
                            <div class="mb-3">
                                <label for="longitude" class="form-label">Longitude</label>
                                <input type="text" class="form-control" id="longitude" name="longitude" required>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('dashboard') }}" class="btn btn-secondary me-2">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
