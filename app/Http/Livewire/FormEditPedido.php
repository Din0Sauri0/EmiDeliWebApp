<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormEditPedido extends Component
{
    public $pedido;

    public $tipo_pedido;
    public $abono;
    public $start;
    public $end;
    public $imagen;
    public $total;
    public $descripcion;

    protected $rules = [
        'tipo_pedido' => 'required',
        'abono' => 'required',
        'start' => 'required',
        'imagen' => 'required',
        'total' => 'required',
        'descripcion' => 'required',
    ];

    public function mount($pedido){
        $this->tipo_pedido = $pedido->tipo_pedido;
        $this->abono = $pedido->abono;
        $this->start = $pedido->start;
        $this->total = $pedido->total;
        $this->descripcion = $pedido->descripcion;

    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.form-edit-pedido');
    }
}
