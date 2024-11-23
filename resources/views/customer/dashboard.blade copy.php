<x-app-layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> {{ __('Dashboard') }} </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900"> {{ __("You're logged in! as Customer") }} </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                    <h1>Customer Dashboard</h1> 
                    <a href="{{ route('bins.create') }}" class="btn btn-success">Add Bin</a>


                    <button id="addBinButton"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Add Bin </button>
                    <x-create-bin-form />
                    <div id="map" style="height: 500px; width: 100%; margin-top: 20px;"></div>
                    <table id="binsTable" class="min-w-full divide-y divide-gray-200 mt-4"> <!-- Table content -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> @push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&callback=initMap"
        async defer></script>
    <script src="{{ asset('javascript/dashboard.js') }}"></script>
@endpush
