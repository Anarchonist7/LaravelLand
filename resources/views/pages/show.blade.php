@extends ('layout')

@section ('content')
    <div>
        @foreach ($pages as $page)
            <br>
            <p class="ganon">{{ $page->title }}</p>
            <br>
            <br>
            <br>
            <p class="ganon">{{ $page->body }} </p>
            <br>
        @endforeach
    </div>
@endsection
