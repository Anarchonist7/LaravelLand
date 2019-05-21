@extends ('layout')

@section ('content')
    <div class="ganon">
        @foreach ($pages as $page)
            <p>{{ $page->title }}</p>
            <br>
            <hr>
            <br>
            <p>{{ $page->body }} </p>
        @endforeach
    </div>
@endsection
