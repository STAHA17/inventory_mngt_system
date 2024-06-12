<!DOCTYPE html>
<html>
<head>
    <title>Hotel Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Custom CSS styles */
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand, .nav-link {
            color: #fff !important;
        }

        .navbar-nav .nav-link:hover {
            /* color: #343a40 !important; Text color on hover */
            /* background-color: black !important; Background color on hover */
            font-size: 1.1em; /* Increase font size on hover */
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: box-shadow 0.3s ease-in-out;
        }

        .container:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        @keyframes rotate {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
        }
    </style>
</head>
<body>
    <div class="container bg-dark">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
            <!-- Icon with rotation -->
            <a class="navbar-brand" href="{{ url('/rooms') }}">
                <span style="display: inline-block; animation: rotate 2s infinite linear;">⚙️</span> Hotel Management System
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('rooms.index') }}">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('bookings.index') }}">Bookings</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('customers.index') }}">Customers</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('staff.index') }}">Staff</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('inventory_items.index') }}">Inventory</a></li>
                </ul>
            </div>
        </nav>
    </div>

    

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
