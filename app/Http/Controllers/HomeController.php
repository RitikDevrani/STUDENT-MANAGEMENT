<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Batch;
use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

       return view('home.index');
        // // Counting total records for dashboard summary
        // $totalStudents = Student::count();
        // $totalTeachers = Teacher::count();
        // $totalCourses = Course::count();
        // $totalBatches = Batch::count();
        // $totalEnrollments = Enrollment::count();
        // $totalPayments = Payment::count();

        // // Send data to home view
        // return view('home', compact(
        //     'totalStudents',
        //     'totalTeachers',
        //     'totalCourses',
        //     'totalBatches',
        //     'totalEnrollments',
        //     'totalPayments'
        // ));
    }
}
