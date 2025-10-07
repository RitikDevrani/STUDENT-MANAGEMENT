<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            background-color: #f5f7fa;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Sidebar */
        .sidebar {
            min-width: 250px;
            background-color: #343a40;
            color: #fff;
            min-height: 100vh;
            transition: all 0.3s;
        }
        .sidebar h4 {
            padding: 20px;
            text-align: center;
            font-weight: bold;
            border-bottom: 1px solid #495057;
        }
        .sidebar .nav-link {
            color: #adb5bd;
            font-weight: 500;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #28a745;
            color: #fff;
            border-radius: 0 20px 20px 0;
        }
        

        /* Content Area */
        .content-area {
            flex: 1;
            padding: 30px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }

        .table thead {
            background-color: #28a745;
            color: #fff;
        }

        .table-hover tbody tr:hover {
            background-color: #e9f7ef;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column p-3">
        <h4>📚 Student Management</h4>
        <ul class="nav nav-pills flex-column mt-4">
            <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link {{ Request::is('home*') ? 'active' : '' }}"><i class="fa fa-home me-2"></i> Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/students') }}" class="nav-link {{ Request::is('students*') ? 'active' : '' }}"><i class="fa fa-user-graduate me-2"></i> Students</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/teachers') }}" class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}"><i class="fa fa-chalkboard-teacher me-2"></i> Teachers</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/courses') }}" class="nav-link {{ Request::is('courses*') ? 'active' : '' }}"><i class="fa fa-book me-2"></i> Courses</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/batches') }}" class="nav-link {{ Request::is('batches*') ? 'active' : '' }}"><i class="fa fa-layer-group me-2"></i> Batches</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/enrollments') }}" class="nav-link {{ Request::is('enrollments*') ? 'active' : '' }}"><i class="fa fa-clipboard-list me-2"></i> Enrollments</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/payments') }}" class="nav-link {{ Request::is('payments*') ? 'active' : '' }}"><i class="fa fa-money-bill me-2"></i> Payments</a>
            </li>
        </ul>
    </div>

    
    <!-- Main Content -->
    <div class="content-area">
        @yield('content')
    </div>

    


</body>
</html>
