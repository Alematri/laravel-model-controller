@extends("layouts.main")

@section("content")

    <div class="container d-flex flex-column align-items-center">


        <h1 class="text-center">{{ $movie->title }}</h1>

        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">{{ $movie->original_title }}</p>
                <p class="card-text">{{ $movie->nationality }}</p>
                <p class="card-text">{{ $movie->date }}</p>
                <p class="card-text">{{ $movie->vote }}</p>
                <a href="{{ route("home") }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>





@endsection
