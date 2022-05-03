<?php

namespace App\Http\Livewire;

use App\Asistente;
use Livewire\Component;

class Asistencia extends Component
{
    public $nombre;
    public $email;
    public $telefono;
    public $empresa;
    public $asistir = false;

    protected $rules = [

        'nombre' => 'required|min:4',

        'email' => 'required|email',

        'telefono' => 'required|numeric|digits_between:8,11',

        'empresa' => 'nullable|min:3|max:100'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validatedData = $this->validate();
        Asistente::create($validatedData);
        $this->dispatchBrowserEvent('close-modal');
    }

    public function changeValue($value)
    {
        $this->asistir = $value;
    }

    public function render()
    {
        return view('livewire.asistencia');
    }
}
