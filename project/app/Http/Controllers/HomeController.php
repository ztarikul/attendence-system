<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all();

        $categories = Category::all();
    
        return view('home' , ['posts'=> $posts]);
       
    }

    public function show(){
        return view('admin.profile');
    }

    public function update(Request $request){

        $user = Auth::user();

        $this->validate( $request, [
            'name' => 'required',
            'email' =>'required|unique:users,email,'.$user->id,
            'password' => 'required'
        ]);

        $user->update($request->all());

        return redirect()->route('user.show');
            
    }
}
