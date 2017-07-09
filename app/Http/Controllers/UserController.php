<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Session;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::all();
       // return View('admin.user.index')->with('user', $user);
        return view('admin.user.index',[ 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.user.create');
        $user = User::create([
              'name' => $data['name'],
              'email' => $data['email'],
              'password' => bcrypt($data['password']),
              
          ]);
          
            return $user;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required|min:6',
            

        //     ]);

        // $user = new User;
        // // fill the object
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;

        // //save object to database
        // $user->save();
        // //message success
        // Session::flash('message', 'Berhasil menambahkan type tempat sampah!');
        // return redirect('admin/user'); // Set redirect ketika berhasil

        $user = array(
            
            
            'name'       => 'required',
            'email'      => 'required|email|unique:users',
            'password'   => 'required|min:6',
        );
       

            $user = new User;
            
            $user->password = Hash::make(Input::get('password'));
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->save();
            // redirect
            Session::flash('message', 'Successfully created user!');
            return redirect('admin/user');
            
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
        return View('admin.user.edit')->with('user',$user);
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
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'point' => 'required',
            'role' => 'required'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        Session::flash('message', 'Berhasil mengedit Data User!');
        return redirect('admin.user'); // Set redirect ketika berhasil
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
         User::destroy($id);
       // Beri message kalau berhasil
       Session::flash('message', 'Berhasil menghapus user!');
       return redirect('admin.user'); // Set redirect ketika berhasil
    }
}
