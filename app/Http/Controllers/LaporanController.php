<?php

namespace App\Http\Controllers;
use App\Http\Requests\LaporanRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Api;
use Request;
class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    
    public function index()
    {
    	$name = 'Tabel Laporan';
        $laporans=Api::all();
    	return view('laporan.index',compact('laporans'))->with('name', $name );

    }

    
    public function create()
    {
        //
        $name = 'Input Laporan'; 
    return view('laporan.create')->with('name', $name );
    }

    public function store(LaporanRequest $request)
    {
     
    Api::create($request->all());

    return redirect('laporan');
    }

    public function edit($id)
        //
        {
        $name = 'Tabel Laporan';
        $laporan=Api::find($id);
        return view('laporan.edit',compact('laporan'))->with('name', $name );
    

    }

    public function update($id, LaporanRequest $request )
    {
        //
        $laporanUpdate=Request::all();
        $laporan=Api::find($id);
        $laporan->update($laporanUpdate);
        return redirect('laporan');
    }


    

    public function destroy($id_laporan){
        Api::find($id_laporan)->delete();
        return redirect('laporan');
    }

    
}
