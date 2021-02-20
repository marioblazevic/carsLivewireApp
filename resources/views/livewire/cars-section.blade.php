<div>
    <form action="">
        <div class="input-group mb-3">
            <input wire:model="search" type="text" class="form-control" placeholder="Search for favourite car.." aria-label="Username" aria-describedby="basic-addon1" autofocus>
        </div>
    </form>
    <div class="cars mt-5">
    @foreach($cars as $car)
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">{{ $car->title }}</h5>
            <p class="card-text">{{ $car->body }}</p>
            <a href="{{ route('car.show', $car->id) }}" class="btn btn-primary">See Comments</a>
        </div>
    </div>
    @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{ $cars->links() }}
    </div>
</div>