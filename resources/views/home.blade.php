@extends("layouts.main")

@section("content")

    <h1 class="text-center">Home</h1>
        <div class="container d-flex flex-wrap">

            @foreach ($movies as $movie)

            <div class="card m-2" style="width: 15rem; height: 10rem">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title text-center">{{ $movie->title }}</h5>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route("detail", ["id" => $movie->id]) }}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

@endsection
