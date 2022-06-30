<?php

namespace App\Http\Livewire;

use App\Models\Pedido;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormEditPedido extends Component
{
    use WithFileUploads;
    public $pedido;
    public $pedido_id;

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
        'imagen' => 'nullable',
        'total' => 'required',
        'descripcion' => 'required',
    ];

    public function mount($pedido){
        $this->pedido_id = $pedido->id;

        $this->tipo_pedido = $pedido->tipo_pedido;
        $this->abono = $pedido->abono;
        $this->start = $pedido->start;
        $this->total = $pedido->total;
        $this->descripcion = $pedido->descripcion;

    }

    public function save(){
        $cliente = Pedido::find($this->pedido_id);
        $validate = $this->validate();
        //dd($this->imagen);
        if($this->imagen){
            $image_path = $this->imagen->store('img/Uploads', 'public_uploads');
            $cliente->imagen = $image_path;
        }
        
        $cliente->tipo_pedido = $this->tipo_pedido;
        $cliente->abono = $this->abono;
        $cliente->start = $this->start;
        
        $cliente->total = $this->total;
        $cliente->descripcion = $this->descripcion;

        $cliente->save();
        return redirect('/pedido/'.$cliente->id);
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.form-edit-pedido');
    }
}
