<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobsCollection;

class JobsCollection_Controller extends Controller
{
    public function show($slug)
    {
        return view('post', [
            'post' => Post::where('slug', '=', $slug)->first()
        ]);
    }
}
