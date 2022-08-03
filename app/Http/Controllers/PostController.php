<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
     public function index(){
      $data_hotel = Post::all();
      return view('hotel', [
         'data_hotel' => $data_hotel
      ]);
     }
}
