<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GalleryController extends Controller
{
    // List Galleries
    public function index()
    {
        //die('Gallery/index');
        $test = 'TESTING';
        return view('gallery/index', compact('test'));
    }

    // show create form

    public function create()
    {
        die('Gallery/create');
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
