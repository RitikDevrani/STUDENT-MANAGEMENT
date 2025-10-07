@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Enrollments</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enrollment Number : {{ $enrollments->enroll_no }}</h5>
        <p class="card-title">Batch : {{ $enrollments->batch_id }}</p>
        <p class="card-title">Student : {{ $enrollments->student_id }}</p>
        <p class="card-title">Join Date : {{ $enrollments->join_date }}</p>
        <p class="card-title">Fee : {{ $enrollments->fee }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection