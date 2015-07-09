<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
   
    public function create()
    {
        //
        $name = 'Input Laporan';
    return view('user.create')->with('name', $name );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UserRequest $request)
    {
       User::create($request->all());

    return redirect('user/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        $name = 'Tabel User';
        $users=User::all();
        return view('user.index',compact('users'))->with('name', $name );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //

        // $user=User::find($id);
       //  return view('user.edit',compact('user'));
        $name = 'Tabel User';
        $user=User::find($id);
        return view('user.edit',compact('user'))->with('name', $name );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, UserRequest $request)
    {
        //
        $userUpdate=Request::all();
        $user=User::find($id);
        $user->update($userUpdate);
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id){
        User::find($id)->delete();
        return redirect('user');
    }
}
