@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <a href="#">{{$lesson->teacher->name}}</a> taught:
                      <h4>{{ $lesson->title}}</h4>
                </div>

                <div class="panel-body">
                    {{$lesson->content}}
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach($lesson->comments as $comment)
              @include ('lessons.comment')
            @endforeach
        </div>
    </div>

    @if (auth()->check())
      <div class="row justify-content-center">
          <div class="col-md-12">
            <form method="POST" action="{{ $lesson->path() . '/comments' }}">
              {{ csrf_field()}}

              <div class="form-group">
                <textarea name="content" id="content" class="form-control" placeholder="Care to comment?" rows="6"></textarea>
              </div>

              <button type="submit" class="btn btn-default">Comment on this lesson</button>
            </form>
          </div>
        </div>
    @else
      <p class='text-center'>Please <a href="{{ route('login') }}">sign in</a> or <a href="{{ route('register') }}">register an account</a> to comment on this lesson.</p>
    @endif
  </div>

@endsection
