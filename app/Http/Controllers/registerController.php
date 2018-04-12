<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use Session;
use DB;


class registerController extends Controller
{
    public function registerPageLoad()
    { 
    	return view('register');
	}

	public function index()
    {
        //
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
        $this->validate($request,[
              'fullname' => 'bail | required | min:4',
              'email'    => 'bail  | required | unique:registrations,email',
              'username' => 'bail | required | min:4',
              'password'  =>  'required|min:4',
              'conpassword'  =>  'required|min:4 | same:password',

            ]);
        
        $reg = new Registration();

        $reg->fullname = $request->fullname;
        $reg->email    = $request->email;
        $reg->username = $request->username;
        $reg->password = $request->password;

        $reg->save();

        Session()->flash('SuccessMessage', "Registration Created Successfully");
       return redirect()->route('login');
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
