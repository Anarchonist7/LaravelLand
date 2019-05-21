<?php

namespace App\Http\Controllers;

use App\Comment;

class GanondorfController extends Controller
{

    public function index()

    {

        $dorfs = Comment::all();


        return view('ganondorf', compact('dorfs'));

    }

    public function show(Comment $dorf)

    {

        return view('show', compact('dorf'));

    }


}
