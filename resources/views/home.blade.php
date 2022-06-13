@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-5">
            @forelse($movies as $movie)
            <div class="col">
                <div class="card">
                    <img class="img-fluid" src="{{$movie->image}}" alt="{{$movie->title}}">
                    <h3>{{$movie->original_title}}</h3>
                    <p>{{$movie->nationality}}</p>
                    <p>{{$movie->date}}</p>
                    <p>{{$movie->vote}}</p>
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
@endsection