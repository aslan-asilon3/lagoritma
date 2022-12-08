<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('main_page.user_setting.index', compact('users'));
    }


    public function create()
    {
        return view('main_page.user_setting.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'name'     => 'required',
            'email'   => 'required',
            'status'   => 'required',

        ]);
    
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/users', $image->hashName());
    
        $user = User::create([
            'image'     => $image->hashName(),
            'name'     => $request->name,
            'email'   => $request->email,
            'status'   => $request->status,

        ]);
    
        if($user){
            //redirect dengan pesan sukses
            return redirect()->route('main_page.user_setting.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('main_page.user_setting.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }


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
