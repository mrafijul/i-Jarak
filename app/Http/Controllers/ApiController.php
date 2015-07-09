<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;
use App\Register;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        $name = 'Dashboard';
    return view('home')->with('name', $name );
    }
    
    public function getAllLokasi() {
        
        return Api::select('longitude','latitude')->get();
    }

    public function getInfoDetail(){
        return Api::all();
    }

    public function getAllFilteredByLocation(){
        return Api::orderBy('alamat','asc')->get();
    }
    public function getAllFilteredByKeterangan(){
        return Api::orderBy('keterangan','asc')->get();
    }
     public function editLevelKerusakan(){
            Api::where('id_laporan', $id_laporan)->
            update(['level' => $level]);
    }
    public function editStatusLaporan(){
           Api::where('id', $id_laporan)->
           update(['status' => $status]);
    }
    

}
