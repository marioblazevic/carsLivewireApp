<div>
    <div wire:submit.prevent="submitForm" class="contact-form">
        <h1>Contact us</h1>
        <p class="contact-p">If you have any question you can ask us:</p>
        @if($response)
            <p class="text-success text-center">{{ $response }}</p>
        @endif
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input wire:model="email" type="text" class="form-control">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Title</label>
                <input wire:model="title" type="text" class="form-control" id="exampleInputPassword1">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Message</label>
                <textarea wire:model="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('message')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
