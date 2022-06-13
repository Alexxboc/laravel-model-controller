@extends('layouts.app')

@section('content')

<section class="movies">
    <div class="container">
        <div class="row row-cols-5 gy-5">
            @forelse($movies as $movie)
            <div class="col">
                <div class="card border-0">
                    <img src="{{$movie->image}}" alt="{{$movie->title}}">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$movie->original_title}}</h5>
                        <small class="language">
                            Lan: {{$movie->nationality}}
                        </small>
                        <small class="date">
                            Release date: {{$movie->date}}
                        </small>
                    </div>

                    <strong class="text-center">{{$movie->vote}}</strong>
                </div>
            </div>
            <!-- /.col -->
            @empty
            <p>Nothing to show!</p>
            @endforelse
        </div>
        <!-- /.row row-cols-3 -->
    </div>
    <!-- /.container -->
</section>

@endsection