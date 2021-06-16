<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index(){

        $employee_guests = Guest::where('guest_status', 'emp_guest')->whereDate('created_at', Carbon::today())->get();
        $management_guests = Guest::where('guest_status', 'management_guest')->whereDate('created_at', Carbon::today())->get();
        $special_guests = Guest::where('guest_status', 'special_guest')->whereDate('created_at', Carbon::today())->get();
        // dd($employee_guests);


        $today_total_guests = Guest::whereDate('created_at', Carbon::today())->get();

        return view('admin.index', ['employee_guests' => $employee_guests, 'management_guests'=>$management_guests, 'special_guests'=>$special_guests, 'today_total_guests'=> $today_total_guests ]);
    }
    public function admin_reports(){
        return view('admin.guests.random');
    }


    public function report_generates(Request $request){
        // dd($request);

        if(request('emp_search', "all" && 'from_date', "null")){
            // dd($request);
            $guests = Guest::all();
            
            return view('admin.guests.reports', ['guests' => $guests]);
        }

       
    }
}
