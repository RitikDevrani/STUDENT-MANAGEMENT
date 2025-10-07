@extends('layout')
@section('content')

<div class="container-fluid mt-4">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center py-3">
            <h4 class="mb-0"><i class="fa fa-clipboard-list me-2"></i> Enrollment Management</h4>
            <a href="{{ url('/enrollments/create') }}" class="btn btn-light text-success fw-semibold">
                <i class="fa fa-plus-circle"></i> Add New Enrollment
            </a>
        </div>

        <div class="card-body bg-light">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle">
                    <thead class="table-success text-center">
                        <tr>
                            <th>#</th>
                            <th>Enroll No</th>
                            <th>Batch</th>
                            <th>Student</th>
                            <th>Join Date</th>
                            <th>Fee (₹)</th>
                            <th style="width:200px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($enrollments as $item)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td class="fw-semibold">{{ $item->enroll_no }}</td>
                            <td>{{ $item->batch->name ?? 'N/A' }}</td>
                            <td>{{ $item->student->name ?? 'N/A' }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->join_date)->format('d M, Y') }}</td>
                            <td><span class="badge bg-light text-dark border">₹ {{ number_format($item->fee, 2) }}</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ url('/enrollments/' . $item->id) }}" class="btn btn-outline-info btn-sm" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" class="btn btn-outline-primary btn-sm" title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form method="POST" action="{{ url('/enrollments/' . $item->id) }}" style="display:inline;">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete"
                                            onclick="return confirm('Are you sure you want to delete this enrollment?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-3">No enrollments found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
