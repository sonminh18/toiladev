<?php

namespace Modules\Login\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * @var Adldap
     */
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        if(Auth::check()){
            return redirect('/admin/dashboard');
        }
        else{
            return view('login::index');
        }
    }
    public function signin(Request $request){
        if($request->has('email') &&  $request->has('password')){
            $email = $request->input('email');
            $password = $request->input('password');
            if (Auth::attempt(array('email' => $email, 'password' => $password)))
            {
                return redirect('/admin/dashboard');
            } else {
                return redirect('/');
            }
        }else{
            return response()->json([
                'Message' => 'Tên đăng nhập và Mật khẩu không được để trống!!!',
                'Status' => '300',
            ]);
        }
    }
    public function signout(){
        Auth::logout();
        if (Auth::check())
        {
            return view('dashboard::index');
        } else {
            return redirect('/');
        }
    }

    public function create()
    {
        return view('login::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('login::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('login::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
