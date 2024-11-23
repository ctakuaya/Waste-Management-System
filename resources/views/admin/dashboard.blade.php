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
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/portal.css') }}">
</head>

<body class="">
    <x-app-layout>
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
            <x-staff-table :staffMembers="$staffMembers" />
        </div>

        <!-- Customer table component -->
        <div id="customerTableContainer" style="display: none;">
            <x-customer-table :customers="$customers" />
        </div>
    </x-app-layout>

    <!-- Javascript -->
    <script src="{{ asset('assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/index-charts.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

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
