let map;
let marker;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8
    });

    map.addListener('click', function(e) {
        placeMarker(e.latLng);
    });
}

function placeMarker(location) {
    if (marker) {
        marker.setPosition(location);
    } else {
        marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
    document.getElementById('latitude').value = location.lat();
    document.getElementById('longitude').value = location.lng();
}

document.addEventListener('DOMContentLoaded', function() {
    const addBinButton = document.getElementById('addBinButton');
    const createBinForm = document.getElementById('createBinForm');
    const binsTable = document.getElementById('binsTable');

    createBinForm.style.display = 'none';

    addBinButton.addEventListener('click', function() {
        createBinForm.style.display = 'block';
    });

    createBinForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(createBinForm);

        fetch(createBinForm.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${data.bin.id}</td>
                    <td>${data.bin.name}</td>
                    <td>${data.bin.description}</td>
                `;
                binsTable.appendChild(newRow);
                createBinForm.reset();
                createBinForm.style.display = 'none';

                const marker = new google.maps.Marker({
                    position: { lat: data.bin.latitude, lng: data.bin.longitude },
                    map: map,
                    title: data.bin.name
                });
            } else {
                console.log(data.errors);
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
