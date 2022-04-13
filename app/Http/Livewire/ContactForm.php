<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contacto;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ContactForm extends Component
{
    use LivewireAlert;

    public $nombre;
    public $correo;
    public $telefono;
    public $empresa;
    public $mensaje;

    protected $rules = [

        'nombre' => 'required|min:4',

        'correo' => 'required|email',

        'telefono' => 'required|numeric|digits_between:8,12',

        'empresa' => 'required|min:4',

        'mensaje' => 'required|min:4',

    ];

    public function updated($propertyName)
    {

        $this->validateOnly($propertyName);

    }

    /* public function updatedTelefono($propertyName)
    {

        $this->validateOnly($propertyName);

    } */
    public function saveContact()
    {

        $validatedData = $this->validate();

        try {
            Contacto::create($validatedData);

            $this->alert('success','Correo enviado', [
                'text' => 'uno de nuestros agentes se pondra en contacto contigo',
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
            ]);
        } catch (\Exception $e) {
            //throw $th;
            $this->alert('error','Ocurrió un error', [
                'text' => 'porfavor intentelo de nuevo o contactnos via whatsapp',
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
            ]);
        }

    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
