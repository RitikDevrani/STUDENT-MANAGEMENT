<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
   public function report1($pid)
{
    $payment = Payment::find($pid);

    if (!$payment) {
        abort(404, 'Payment not found');
    }

    $pdf = App::make('dompdf.wrapper');

    $paidDate = \Carbon\Carbon::parse($payment->paid_date)->format('d M, Y');
    $amount = number_format($payment->amount, 2);
    $userName = Auth::check() ? Auth::user()->name : 'System';

    $print = "
    <div style='margin:20px; padding:20px; font-family: sans-serif;'>
        <h1 align='center'>Payment Receipt</h1>
        <hr/>
        <p>Receipt No: <b>{$pid}</b></p>
        <p>Date: <b>{$paidDate}</b></p>
        <p>Enroll No: <b>{$payment->enrollment->enroll_no}</b></p>
        <p>Student Name: <b>" . htmlspecialchars($payment->enrollment->student->name) . "</b></p>
        <hr/>
        <table style='width:100%; border-collapse: collapse;'>
            <tr>
                <th style='border:1px solid #000; padding:5px;'>Course/Batch</th>
                <th style='border:1px solid #000; padding:5px;'>Amount (Rs)</th>
            </tr>
            <tr>
                <td style='border:1px solid #000; padding:5px;'>{$payment->enrollment->batch->name}</td>
                <td style='border:1px solid #000; padding:5px;'>{$amount}</td>
            </tr>
        </table>
        <hr/>
        <span>Printed By: <b>{$userName}</b></span><br/>
        <span>Printed Date: <b>" . date('d M, Y') . "</b></span>
    </div>";

    $pdf->loadHTML($print);
    return $pdf->stream("Payment_Receipt_{$pid}.pdf");
}

}
