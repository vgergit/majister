<div class="card">
    <div class="card-header">
      <div class="card-title">
        <a href="#">  <!-- Link to profile -->
          {{ $comment->owner->name }}
        </a> said {{ $comment->created_at->diffForHumans()}} ...
      </div>
    </div>

    <div class="card-body">
        {{$comment->content}}
    </div>
</div>
<div class="mt-3" />
