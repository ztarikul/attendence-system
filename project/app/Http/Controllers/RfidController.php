<?php

namespace App\Http\Controllers;
use App\Models\Rfid;

use Illuminate\Http\Request;

class RfidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rfids = Rfid::all();
        return view('admin.rfid.view_all_rfid', ['rfids' => $rfids]);
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
        // dd($request);
        $inputs = $request->all();
        $rfid = new Rfid($inputs);
        $rfid->save();
        return redirect()->back();
        
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
        $rfid = Rfid::find($id);
        $rfid->delete();//--DELETE EMPLOYEE'S INFORMATION QUERY--//
        return redirect()->back();
    }

    public function return(Request $request)
    {
        //
        $rfid = Rfid::where('rfid', $request['rfid'])->first();
        $inputs['status'] = "available";
        $rfid->update($inputs);//--DELETE EMPLOYEE'S INFORMATION QUERY--//
        return redirect()->back();
    }
}
