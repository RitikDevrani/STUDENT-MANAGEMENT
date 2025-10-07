@extends('layout')
@section('content')

<div class="container-fluid mt-4">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center rounded-top-4">
            <h4 class="mb-0"><i class="fa fa-user-graduate me-2"></i> Student Management</h4>
            <a href="{{ url('/students/create') }}" class="btn btn-light text-success fw-semibold shadow-sm">
                <i class="fa fa-plus me-1"></i> Add New Student
            </a>
        </div>

        <div class="card-body bg-light">
            <div class="table-responsive">
                <table class="table table-hover align-middle table-borderless shadow-sm rounded-3 overflow-hidden">
                    <thead class="bg-success text-white">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th class="text-center" style="width: 220px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $item)
                        <tr class="table-row-hover">
                            <td>{{ $loop->iteration }}</td>
                            <td class="fw-semibold text-dark">{{ $item->name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->mobile }}</td>
                            <td class="text-center">
                                <a href="{{ url('/students/' . $item->id) }}" class="btn btn-outline-info btn-sm me-1">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ url('/students/' . $item->id . '/edit') }}" class="btn btn-outline-primary btn-sm me-1">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form method="POST" action="{{ url('/students/' . $item->id) }}" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this student?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">No students found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    /* Subtle hover row animation */
    .table-row-hover:hover {
        background-color: #e8f9ee !important;
        transition: background-color 0.3s ease;
    }

    /* Card beautification */
    .card {
        border-radius: 15px;
    }

    .card-header {
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }

    /* Button polishing */
    .btn {
        border-radius: 8px;
        transition: all 0.2s ease-in-out;
    }

    .btn:hover {
        transform: translateY(-2px);
    }

    .table thead th {
        letter-spacing: 0.5px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .table td, .table th {
        vertical-align: middle;
    }
</style>

@endsection
