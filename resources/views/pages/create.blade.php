@extends('layout')

@section ('content')

    <h1 class='page-text-container'>Create a page</h1>
    <div class="page-text-container">
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

            @if (count($errors))
                <div class='ganon'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </form>
    </div>

@endsection
