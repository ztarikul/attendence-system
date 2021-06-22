<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Guest;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function employeeindex()
    {
        //
        $users = User::all();//--EMPLOYEE GUEST--//
        return view('admin.guests.employee_guest', ['users' => $users]);
    }
    public function managementindex()
    {
        //
        $users = User::all();//--MANAGEMENT GUEST-//
        return view('admin.guests.management', ['users' => $users]);
    }
    public function specialindex()
    {
        //
        $users = User::all();//--SPECIAL FORM GUEST--//
        return view('admin.guests.special', ['users' => $users]);
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
     * 
     * 
     * 
     * 
     */
<<<<<<< HEAD
    public function store(Request $request)//guest token query//
=======



    public function store(Request $request)
>>>>>>> bd185141cc5354e8b583a0f014ce459e59f7c94f
    {
        //
        // dd($request);
        $inputs = request()->validate([
            'user_id' => 'required',
            'name'=>'required',
            'phone_number' => 'required',
            'user_name' => 'required',
            'guest_status' => 'required'
        ]);
        $inputs['user_ref_id'] = $request['user_id'];
        
        $id = $inputs['user_id'];

        // webcam image find query //
        $image = $request->get('guest_image');  // your base64 encoded
        $image = str_replace('data:image/jpeg;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        
        $imagePath= 'images/'. Str::random(20) . '.jpeg';
        Storage::disk('public')->put($imagePath, base64_decode($image));
        $inputs['guest_image'] = $imagePath;
        // dd($imagePath);

        // if(request('guest_image')){
        //     $inputs['guest_image'] = request('guest_image')->store('images');
        // }
      

        // dd($users);

        $guest = new Guest($inputs);
        
        $guest->save();
<<<<<<< HEAD
        $users = Guest::latest('id')->first();//new guest entry//
=======


        // New Guest 

        $users = Guest::latest('id')->first(); /// 
>>>>>>> bd185141cc5354e8b583a0f014ce459e59f7c94f

        return view('admin.guests.guest_token', ['users' => $users]);
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
    }
}
