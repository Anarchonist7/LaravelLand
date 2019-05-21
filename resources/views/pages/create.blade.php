@extends('layout');

@section ('content')

    <h1 class='ganon'>Create a page</h1>

    <form method="POST" action="/pages">
        {{ csrf_field() }}
        <label for='title'>Title:</label>
        <input id='title' type='text' name='title'/>
<br>
<br>
        <label for='body'>Content</label>
        <textarea id='body' name='body'></textarea>
<br>
<br>
<br>
        <button type='submit'>Confirm Creation</button>
    </form>

@endsection
