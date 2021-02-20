<?php

namespace App\Http\Livewire;

use App\Mail\ContactUs;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $email;
    public $title;
    public $message;
    public $response = null;

    protected $rules = [
        'title' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:5'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $contact['email'] = $this->email;
        $contact['title'] = $this->title;
        $contact['message'] = $this->message;

        Mail::to('marionbg97@gmail.com')->send(new ContactUs($contact));

        $this->response = "Your message has been sent!";

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->email = "";
        $this->title = "";
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
