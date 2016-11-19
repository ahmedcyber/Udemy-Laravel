<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{
    // List Galleries
    public function index()
    {
        die('Photo/index');
    }

    // show create form

    public function create()
    {
        die('Photo/create');
    }

    // show Photo

    public function store(Request $request)
    {
        die('Photo/create');
    }

    // show photo details

    public function details($id)
    {
        die($id);
    }
}
