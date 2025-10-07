@extends('layout')

@section('content')

<div class="container-fluid mt-4">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-success">🎓 Student Management Dashboard</h2>
        <p class="text-muted">Manage all your records — students, teachers, courses, and more in one place.</p>
    </div>

    <div class="row g-4">

        <!-- Students -->
        <div class="col-md-4 col-lg-3">
            <div class="card text-center shadow-sm border-0 hover-card">
                <div class="card-body">
                    <i class="fa fa-user-graduate fa-3x text-primary mb-3"></i>
                    <h5 class="card-title fw-bold">Students</h5>
                    <p class="card-text text-muted">Manage student profiles and academic details.</p>
                    <a href="{{ url('/students') }}" class="btn btn-outline-primary mt-2">
                        <i class="fa fa-eye me-1"></i> View Students
                    </a>
                </div>
            </div>
        </div>

        <!-- Teachers -->
        <div class="col-md-4 col-lg-3">
            <div class="card text-center shadow-sm border-0 hover-card">
                <div class="card-body">
                    <i class="fa fa-chalkboard-teacher fa-3x text-warning mb-3"></i>
                    <h5 class="card-title fw-bold">Teachers</h5>
                    <p class="card-text text-muted">View and manage teacher information.</p>
                    <a href="{{ url('/teachers') }}" class="btn btn-outline-warning mt-2">
                        <i class="fa fa-eye me-1"></i> View Teachers
                    </a>
                </div>
            </div>
        </div>

        <!-- Courses -->
        <div class="col-md-4 col-lg-3">
            <div class="card text-center shadow-sm border-0 hover-card">
                <div class="card-body">
                    <i class="fa fa-book fa-3x text-danger mb-3"></i>
                    <h5 class="card-title fw-bold">Courses</h5>
                    <p class="card-text text-muted">Organize and track all available courses.</p>
                    <a href="{{ url('/courses') }}" class="btn btn-outline-danger mt-2">
                        <i class="fa fa-eye me-1"></i> View Courses
                    </a>
                </div>
            </div>
        </div>

        <!-- Batches -->
        <div class="col-md-4 col-lg-3">
            <div class="card text-center shadow-sm border-0 hover-card">
                <div class="card-body">
                    <i class="fa fa-layer-group fa-3x text-info mb-3"></i>
                    <h5 class="card-title fw-bold">Batches</h5>
                    <p class="card-text text-muted">Batch-wise student and course management.</p>
                    <a href="{{ url('/batches') }}" class="btn btn-outline-info mt-2">
                        <i class="fa fa-eye me-1"></i> View Batches
                    </a>
                </div>
            </div>
        </div>

        <!-- Enrollments -->
        <div class="col-md-4 col-lg-3">
            <div class="card text-center shadow-sm border-0 hover-card">
                <div class="card-body">
                    <i class="fa fa-clipboard-list fa-3x text-success mb-3"></i>
                    <h5 class="card-title fw-bold">Enrollments</h5>
                    <p class="card-text text-muted">Track and manage student enrollments.</p>
                    <a href="{{ url('/enrollments') }}" class="btn btn-outline-success mt-2">
                        <i class="fa fa-eye me-1"></i> View Enrollments
                    </a>
                </div>
            </div>
        </div>

        <!-- Payments -->
        <div class="col-md-4 col-lg-3">
            <div class="card text-center shadow-sm border-0 hover-card">
                <div class="card-body">
                    <i class="fa fa-money-bill-wave fa-3x text-secondary mb-3"></i>
                    <h5 class="card-title fw-bold">Payments</h5>
                    <p class="card-text text-muted">View and manage student payments.</p>
                    <a href="{{ url('/payments') }}" class="btn btn-outline-secondary mt-2">
                        <i class="fa fa-eye me-1"></i> View Payments
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .hover-card {
        transition: all 0.3s ease;
        border-radius: 15px;
    }

    .hover-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 18px rgba(0,0,0,0.15);
    }

    .card i {
        transition: transform 0.3s ease;
    }

    .hover-card:hover i {
        transform: scale(1.2);
    }

    .btn {
        border-radius: 10px;
        font-weight: 500;
    }

    .text-muted {
        font-size: 0.9rem;
    }
</style>

@endsection
