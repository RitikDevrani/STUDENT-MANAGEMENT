@extends('layout')
@section('content')

<div class="container-fluid mt-4">
    <div class="card shadow-lg border-0 rounded-3">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center py-3">
            <h4 class="mb-0"><i class="fa fa-book me-2"></i>Course Management</h4>
            <a href="{{ url('/courses/create') }}" class="btn btn-light text-primary fw-semibold">
                <i class="fa fa-plus-circle"></i> Add New Course
            </a>
        </div>

        <div class="card-body bg-light">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Syllabus</th>
                            <th>Duration</th>
                            <th style="width:200px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($courses as $item)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td class="fw-semibold text-start">{{ $item->name }}</td>
                            <td>{{ $item->syllabus }}</td>
                            <td>{{ $item->duration() }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ url('/courses/' . $item->id) }}" class="btn btn-outline-info btn-sm" title="View">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ url('/courses/' . $item->id . '/edit') }}" class="btn btn-outline-primary btn-sm" title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form method="POST" action="{{ url('/courses/' . $item->id) }}" style="display:inline;">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete"
                                            onclick="return confirm('Are you sure you want to delete this course?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-3">No courses found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
