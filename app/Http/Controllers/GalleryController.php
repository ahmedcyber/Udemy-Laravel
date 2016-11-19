<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GalleryController extends Controller
{
    // List Galleries
    public function index()
    {
        return view('gallery/index');
    }

    // show create form

    public function create()
    {
        return view('gallery/create');
    }

    // show create form

    public function store(Request $request)
    {
        die('Gallery/create');
    }

    // show create form

    public function show($id)
    {
        die($id);
    }
}
