<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FasilitasKamar;

class FasilitasKamarController extends Controller
{
    public function index(){
        $data_kamar = FasilitasKamar::all();
        return view('adminkamar', [
            'data_kamar' => $data_kamar
        ]);
    }
}
