<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.guests.view_all_employee',['users'=> $users]);
    }
    


    public function manager_view_employee()
    {
        //
        $users = User::all();
        return view('admin.guests.view_all_employee',['users'=> $users]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('admin.guests.edit', ['user'=> $user] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request);
        
        $user = User::find($id);
     
        // $this->validate($request,[
        //     'department'=> 'required',
        //     'designation'=> 'required',
        //     'email'=> 'required',
        //     'phone_number'=> 'required',  
            
        // ]);
        
        $input = request()->validate([
            'department'=> 'required',
            'designation'=> 'required',
            'email'=> 'required',
            'phone_number'=> 'required', 
        ]);

        if(request('emp_image')){
           $input['emp_image'] = request('emp_image')->store('images');
           $user->emp_image = $input['emp_image'];
        }

        $user->department = $input['department'];
        $user->designation = $input['designation'];
        $user->email = $input['email'];
        $user->phone_number = $input['phone_number'];

        $user->update();




        // $user->update($request->all());
        // dd($user);
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $employee = User::find($id);
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
