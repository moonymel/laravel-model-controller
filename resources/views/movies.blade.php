@extends('layouts.basicpage')

@section('content')

<main>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 text-center">
                <h1>Film disponibili</h1>
            </div>
            @foreach ($movies as $movie)
                <div class="col-3 my-3">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                        <p class="card-text">
                            data di rilascio: {{ $movie->date }}<br>
                            nazionalità: {{ $movie->nationality }}<br>
                            voto: {{ $movie->vote }}<br>
                        </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection


