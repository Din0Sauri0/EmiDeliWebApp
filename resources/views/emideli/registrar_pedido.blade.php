@extends('app')

@section('title')
Registrar pedido
@endsection

@section('content')

<div class="container">

    <div class="card mt-4 mb-4">
        <div class="card-header">
            Registrar Pedido
        </div>
        <div class="card-body">
            <form action="{{ route('prueba')}}" method="POST">
                
                @csrf

                <div class="mb-3">
                    <label for="tipo_pedido" class="form-label">Tipo de Pedido</label>
                    <input type="text" name="tipo_pedido" id="tipo_pedido" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="nombre_cliente" class="form-label">Nombre del Cliente</label>
                    <input type="text" name="nombre_cliente" id="nombre_cliente" class="form-control" id="exampleInputPassword1">
                </div>
                
                <div class="mb-3">
                    <label for="abono" class="form-label">Abono</label>
                    <input type="number" name="abono" id="abono" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="fecha_entrega" class="form-label">Fecha de entrega</label>
                    <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen referencial</label>
                    <input type="text" name="imagen" id="imagen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="total_pedido" class="form-label">Total pedido</label>
                    <input type="number" name="total_pedido" id="total_pedido" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Agendar</button>
            </form>
        </div>
    </div>
</div>

@endsection