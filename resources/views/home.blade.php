@extends('Layouts/main')

@section('content')
   <div class="row">

    @foreach($movies as $singlemovie)
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$singlemovie->title}}</h5>
              <p class="card-text">
                <h2>{{$singlemovie->original_title}}</h2><br>
                NATIONALITY: {{$singlemovie->nationality}} <br>
                DATE: {{$singlemovie->date}} <br>
                VOTE: {{$singlemovie->vote}} <br>
            </p>
              <a href="#" class="btn btn-primary">WATCH</a>
            </div>
          </div>
    </div>
    @endforeach
   </div>
@endsection