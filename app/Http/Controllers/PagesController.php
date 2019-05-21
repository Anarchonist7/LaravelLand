<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{


    public function index()

    {

        return view('pages.index');

    }

    public function create()

    {

        return view ('pages.create');

    }

    public function store()

    {

        $this->validate(request(), [
            'title' => 'required',

            'body' => 'required'
        ]);

        $page = new \App\Pages;

        $page->title = request('title');
        $page->body = request('body');

        $page->save();


        return redirect('/');

    }

    public function show()

    {
        $pages = \App\Pages::all();

        return view ('pages.show', compact('pages'));

    }
}
