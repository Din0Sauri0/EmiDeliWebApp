<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;

class RegistrarCliente extends Component
{
    public $nombre;
    public $contacto;
    public $direccion;

    protected $rules = [
        'nombre' => 'required|min:3',
        'contacto' => 'required',
        'direccion' => 'required',
    ];

    public function clear(){
        $this->nombre = null;
        $this->contacto = null;
        $this->direccion = null;
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save(){
        $validate = $this->validate();
        $cliente = new Cliente();
        $cliente->nombre = $validate['nombre'];
        $cliente->contacto = $validate['contacto'];
        $cliente->direccion = $validate['direccion'];
        $cliente->user_id= auth()->id();
        $cliente->save();
        
        return redirect('/cliente');
    }

    public function edit($id){
        $client = Cliente::find($id);
        $this->nombre = $client->nombre;
        $this->contacto = $client->contacto;
        $this->direccion = $client->direccion;
    }
    public function update($id){
        $validate = $this->validate();
        $client = Cliente::find($id);
        $client->nombre = $this->nombre;
        $client->contacto = $this->contacto;
        $client->direccion = $this->direccion;
        $client->save();
        return redirect('cliente');
    }

    public function destroy($id){
        Cliente::destroy($id);
        return redirect('/cliente');
    }

    public function render()
    {
        $ruta = Route::currentRouteName();
        $clients = Cliente::all();
        return view('livewire.registrar-cliente', compact('clients', 'ruta'));
    }
}
