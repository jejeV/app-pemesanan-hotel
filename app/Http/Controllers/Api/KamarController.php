<?php

namespace App\Http\Controllers\Api;

use App\Models\Kamar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\KamarResource;


class KamarController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $kamars = Kamar::latest()->paginate(5);

        //return collection of posts as a resource
        return new KamarResource(true, 'List Data Posts', $kamars);
    }
}
