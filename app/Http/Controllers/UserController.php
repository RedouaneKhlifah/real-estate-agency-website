<?php

namespace App\Http\Controllers;

use App\Models\property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.signup');
    }

    
    public function login(){
        return view('pages.login');
    }

   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $fields = $request->validate([
            'first_Name' => 'required|string',
            'last_Name' => 'required|string',
            'phone_Number' => 'required|integer|unique:users,phone_Number',
            'profile_Image' => 'image',
            'location' => 'required|string',
            'role' => 'integer',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
        ]);

        if($request->hasFile('profile_Image')){
        $image = $fields['profile_Image'];
        $title = date('Ymdhis') .'.'. $image->getClientOriginalExtension();
        $fields['profile_Image'] = $title;
        $image->move(public_path('assets/img/users') ,$title);
        }else {
            $fields['profile_Image'] = 'default_profile.jpg';
        }

        // dd($fields);
        
        // create user
        $user = User::create([
            'first_Name' => $fields['first_Name'],
            'last_Name' => $fields['last_Name'],
            'profile_Image' => $fields['profile_Image'],
            'phone_Number' => $fields['phone_Number'],
            'location' => $fields['location'],
            'role' => $fields['role'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ]);

        
      

        // login 
        auth()->login($user);

        //redirect 
        return redirect('/home')->with('messge','loged in');
    }



    public function logout(Request $request){

        auth()->logout();
        

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->back();

    }


    public function authenticate(Request $request){
      
        $fields = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt($fields)){
            
            $request->session()->regenerate();
            return redirect('/home');
        }
        return back()->withErrors(['error' => 'error'])->withInput($request->only('email'));
      
        
    }



    /**
     * Display the specified resource.
     */

     public function profile(){
        $user = user::find(auth()->id());
       
        return view('pages.profile',[
            'user' => $user
        ]);
    }


    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = user::find(auth()->id());
       
        return view('pages.updateProfile',[
            'user' => $user
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
      
        $user  = User::find(auth()->id());
    
        $fields = $request->validate([
            'first_Name' => 'required|string',
            'last_Name' => 'required|string',
            'phone_Number' => 'required|integer|',
            'email' => 'required|string|',
        ]);
    
        
        if ($request->hasFile('profile_Image')) {

        $image = $request['profile_Image'];
        $title = date('Ymdhis') .'.'. $image->getClientOriginalExtension();
        $fields['profile_Image'] = $title;
        }
    
     
        $user->update($fields);
        return redirect('/profile');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
