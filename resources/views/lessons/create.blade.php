@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Submit a Lesson for Review</div>

                <div class="panel-body">
                  <form method="POST" action="/lessons">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="title">Title:</label>
                      <input name="title" type="text" class="form-control" id="title" placeholder="_">
                    </div>

                    <div class="form-group">
                      <label for="content">Content:</label>
                      <textarea name="content" class="form-control" id="content" rows="8"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit your lesson</button>

                    <input type="hidden" id="thumbnail" name="thumbnail" value="thumbnail.jpg" />
                  </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
