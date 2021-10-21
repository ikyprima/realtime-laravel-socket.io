<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use event 
use App\Events\notifikasiEvent;

class notifikasiController extends Controller
{
    
    public function index(){
        //load view yang menampilkan Form kirim
        return view('viewkirim');
    }

    public function viewTerimaNotifikasi(){
        //load view yang menampilkan Terima Data notifikasi
        return view('viewTerima');

    }

    public function kirimNotifikasi(){
        //eksekusi event 
        $data= 'data';
        broadcast(new notifikasiEvent(compact('data')));
    }
}
