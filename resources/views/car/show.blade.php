<x-master>
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">{{ $car->title }}</h5>
                <p class="card-text">{{ $car->body }}</p>
            </div>
        </div>

        <livewire:comments-section :car="$car"/>
    </div>
</x-master>