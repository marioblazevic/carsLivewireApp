<div>
    <form wire:submit.prevent="submitForm" class="main-form" action="">
    <h2>Leave a comment</h2>
    <div class="input-group mb-3 mt-5">
        <input wire:model="username" type="text" class="form-control" placeholder="username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    @error('username')
            <p class="text-danger">{{ $message }}</p>
    @enderror
    <div class="form-group">
        <textarea wire:model="body" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="text.."></textarea>
    </div>
    @error('body')
            <p class="text-danger">{{ $message }}</p>
    @enderror
    <button type="submit" class="btn btn-primary">Comment</button>
    </form>
    <div class="comments">
        @foreach($car->comments as $comment)
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $comment->username }}</h5>
                <p class="card-text">{{ $comment->body }}</p>
                <p class="text-muted text-right">{{ $comment->created_at->diffForHumans() }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
