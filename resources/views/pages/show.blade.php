@extends ('layout')

@section ('content')
    <div>
        @foreach ($pages as $page)
            <div class="page-text-container">
                <br>
                <h3 class="ganon">{{ $page->title }}</h3>
                <br>
                <br>
                <p class="ganon">{{ $page->body }} </p>
                <br>
            </div>
        @endforeach
    </div>
@endsection
