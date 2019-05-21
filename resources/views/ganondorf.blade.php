<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ganondorf</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    </head>
    <body>
        <p>SHALLOM!!!!</p>
        <p class="ganon">Well I'll be shittered! Yes I would be</p>
        <!-- <img src=https://www.ssbwiki.com/images/3/32/Ganondorf-Victory3-SSBM.gif /> -->
        <a href="/">You are not yet ready for this darkness, begone child!</a>
        <ul class='ganon'>
            @foreach ($shitters as $shitter)
                <li class="cool-link"><a href="/ganondorf/{{$shitter->id}}">{{ $shitter->body }}</a></li>
            @endforeach
        </ul>
    </body>

    <html>
