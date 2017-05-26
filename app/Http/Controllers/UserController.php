<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.index');
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
    public function show($verify)
    {
        $verify=User::find($verify);
        return view('admin.show',['verify'=>$verify]);
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
        $verify=User::find($id);
        $verify->verify=$request->foractive;        
        $verify->save();
        return redirect()->route('adminhome');
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

    public function getlogin(){

        return view('auth.login');
    }

    public function getregister(){

        return view('auth.register');
    }

    public function login(Request $request){

        $this->validate($request,
            [

                'email'=>'required',
                'password'=>'required|',

            ]);
        $email=$request->email;
        $password=$request->password;

        if(Auth::attempt(['email'=>$email,'password'=>$password])){

            if(Auth::user()->verify == 'NotActive'){

                return "your account not activate";

            }
            else
            {

            return redirect()->intended(\App\User::UserRole(Auth::user()->state).'/home');
            }
            
        }
        else
        {

            return "fail";
        }

    }

    public function register(Request $request){

        $this->validate($request,
            [

                'name'=>'required',
                'email'=>'required',
                'password'=>'required',

            ]);

        $register=new User();
        $register->name=$request->name;
        $register->email=$request->email;
        $register->password=bcrypt($request->password);
        $register->save();
        return redirect()->back();
    }

    public function userdash(){
        return view('user.user');
        
    }

    public function admindash(){
        $user=User::where('state',0)->get();
        return view('admin.index',['user'=>$user]);
    }

    public function logout(){

        Auth::logout();
        return redirect('login');
    }
}
