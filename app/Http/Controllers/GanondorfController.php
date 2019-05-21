<?php

namespace App\Http\Controllers;

use App\Comment;

class GanondorfController extends Controller
{

    public function index()

    {

        $shitters = Comment::all();


        return view('ganondorf', compact('shitters'));

    }

    public function show(Comment $shitter)

    {

        return view('show', compact('shitter'));

    }


}
