<?php

namespace App\Http\Controllers;
use Request;
use App\Http\Requests\StumRequest;
use App\Stum;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $name = 'Tabel Mobil Stum';
        $stum=Stum::all();
        return view('stum.index',compact('stum'))->with('name', $name );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
     public function create()
    {
        //
        $name = 'Input Lokasi Mobil Stum';
        return view('stum.create')->with('name', $name );
        
    }

    public function store(StumRequest $request)
    {
        //
    Stum::create($request->all());

    return redirect('stum');
    }

    public function show($id)
    {
        
        
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $name = 'Tabel Mobil Stum';
        $stum=Stum::find($id);
        return view('stum.edit',compact('stum'))->with('name', $name );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, StumRequest $request)
    {
        //
        $stumUpdate=Request::all();
        $stum=Stum::find($id);
        $stum->update($stumUpdate);
        return redirect('stum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
   public function destroy($id){
        Stum::find($id)->delete();
        return redirect('stum');
    }
}
