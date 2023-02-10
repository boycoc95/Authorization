<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Post;

class PostController extends Controller
{

    public function __constructor()
    {
        $this->middlware('auth:admin');
    }
    public function index(Request $request)
    {
        $this->authorize('getAll', Post::class);



    }
}
