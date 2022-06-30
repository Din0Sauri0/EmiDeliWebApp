<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use App\Models\Ganancia;
use App\Models\Pedido;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormPedido extends Component
{
    use WithFileUploads;
    

    public $check = false;

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
        'start' => 'required|after:today',
        'imagen' => 'nullable',
        'total' => 'required|gt:abono',
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
        $ganancia = new Ganancia();
        
        $date = Carbon::parse($this->start);
        $month = $date->format('m');
        $year = $date->format('Y');
        Ganancia::create([
            'mes' => $month,
            'year' => $year,
            'total' => $this->total,
            'user_id' => Auth::id()

        ]);
        // $ganancia->mes = $month;
        // $ganancia->year = $year;
        // dd(intval($this->total));
        // $ganancia->total = intval($$this->total);
        // $ganancia->user_id = Auth::id();
        // $ganancia->save();
        return redirect('/pedido');
    }

    public function render()
    {
        $clients = Cliente::all();
        return view('livewire.form-pedido', compact('clients'));
    }
}
