<!-- resources/views/bins/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Register a Bin</h1>

    <form action="{{ route('bins.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="location_name">Location Name</label>
            <input type="text" name="location_name" id="location_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" name="latitude" id="latitude" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" name="longitude" id="longitude" class="form-control" required>
        </div>

        <div id="map" style="height: 400px; width: 100%;"></div>

        <button type="submit" class="btn btn-primary">Register Bin</button>
    </form>
</div>

<script>
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    });

    var marker;

    map.addListener('click', function(event) {
        if (marker) {
            marker.setPosition(event.latLng);
        } else {
            marker = new google.maps.Marker({
                position: event.latLng,
                map: map
            });
        }
        document.getElementById('latitude').value = event.latLng.lat();
        document.getElementById('longitude').value = event.latLng.lng();
    });
}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap"
async defer></script>
@endsection
