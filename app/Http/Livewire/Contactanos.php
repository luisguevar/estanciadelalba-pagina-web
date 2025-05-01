<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contactanos extends Component
{

    public $name;
    public $email;
    public $subject;
    public $text;

    protected $rules = [
        'name' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'email' => 'required|string|max:255',

    ];

    protected function messages()
    {
        return [
            'name.required' => 'El campo  es obligatorio.',
            'subject.required' => 'El campo  es obligatorio.',
            'email.required' => 'El campo  es obligatorio.',


        ];
    }


    public function enviarmensaje()
    {
        $this->validate();

        session()->flash('message', '¡Mensaje enviado con éxito!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contactanos');
    }
}
