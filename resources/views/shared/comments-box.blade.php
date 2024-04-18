<div>
    <form action="{{ route('reviews.comments.store', $review->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_token" value = "{{ csrf_token() }}" />
        <div class="mb-3">
            <textarea name="content" class="fs-6 form-control" rows="1"></textarea>
        </div>
        <div>
            <button type="submit" class=" btn btn-primary btn-sm"> Post Comment </button>
        </div>
    </form>
    <hr>
    @foreach ($review->comments as $comment)
        <div class="d-flex align-items-start">
<<<<<<< HEAD
            <img style="width:35px" class="me-2 avatar-sm rounded-circle" src="{{ $comment->user->getImageURL() }}"
                alt="{{ $comment->user->name }}">
=======
            <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                src="{{$comment->user->getImageURL()}}" alt="{{$comment->user->name}}">
>>>>>>> 80067199880a2d7d0349f6e0cfa005434ef4d60f
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6 class="">Elena
                    </h6>
                    <small class="fs-6 fw-light text-muted"> {{ $comment->created_at }}</small>
                </div>
                <p class="fs-6 mt-3 fw-light">
                    {{ $comment->content }}
                </p>
            </div>
        </div>
    @endforeach
</div>
