<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();

        if($mobil->isEmpty()){
            return response()->json([
                "message" => "data mobil belum ada"
            ]);
        }

        return response()->json($mobil);
    }
    public function show($id)
    {
        $mobil = Mobil::find($id);

        if(!$mobil){
            return response()->json([
                'message' => 'mobil tidak di temukan'
            ]);
        }

        return response()->json($mobil);
    }
}
