<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use App\Models\Pedido;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormPedido extends Component
{
    use WithFileUploads;

    public $tipo_pedido;
    public $title;
    public $abono;
    public $start;
    public $end;
    public $imagen;
    public $total;
    public $descripcion;

    protected $rules = [
        'tipo_pedido' => 'required',
        'title' => 'required',
        'abono' => 'required',
        'start' => 'required',
        'imagen' => 'required',
        'total' => 'required',
        'descripcion' => 'required',
    ];

    //TODO: Utilizada para realizar las validades en tiempo real.
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save(){
        $this->validate();
        $image_path = $this->imagen->store('img/Uploads', 'public_uploads');
        Pedido::create([
            'tipo_pedido' => $this->tipo_pedido,
            'title' => $this->title,
            'abono' => $this->abono,
            'start' => $this->start,
            'end' => $this->start,
            'imagen' => $image_path,
            'total' => $this->total,
            'descripcion' => $this->descripcion,       
        ]);
        return redirect('/pedido');
    }

    public function render()
    {
        $clients = Cliente::all();
        return view('livewire.form-pedido', compact('clients'));
    }
}
