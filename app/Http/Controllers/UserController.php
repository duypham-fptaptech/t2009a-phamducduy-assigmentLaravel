<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userList()
    {
        return view('UserList');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userForm()
    {
        return view('UserForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'identityNumber' => 'required|size:10',
                'firstname' => 'required',
                'lastname' => 'required',
                'phone' => 'required'
            ],
            [
                'identityNumber.required' => '* Please enter identity number.',
                'identityNumber.size' => '* Must be 10 character.',
                'firstname.required' => '* Please enter first name.',
                'lastname.required' => '* Please enter last name.',
                'phone.required' => '* Please enter phone.',
            ]
        );
        $request->$this->validate();
                $obj = new account();
        $obj->identityNumber = $request->get('identityNumber');
        $obj->firstname = $request->get('firstname');
        $obj->lastname = $request->get('lastname');
        $obj->phone = $request->get('phone');
        $obj->save();
        return redirect('UserForm');
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
