<!DOCTYPE html>
<html>
<head>
    <title>Hotel Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Hotel Management</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('rooms.index') }}">Rooms</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('bookings.index') }}">Bookings</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('customers.index') }}">Customers</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('staff.index') }}">Staff</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('inventory_items.index') }}">Inventory</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
