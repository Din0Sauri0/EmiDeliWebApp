@extends('app')

@section('title')
Agregar Pedido
@endsection

@section('content')


<div class="container p-4">
    <div class="content-center row row-cols-1 row-cols-md-2" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 15px;">
        <div class="col mb-4">
            <div class="card-body">
                <form action="{{ route('registro_pedido') }}" method="POST">
                    @csrf

                    <!-- //*Tipo pedido -->
                    <div class="mb-3">
                        <label class="size card-text"><b>Tipo de pedido.</b></label>
                        <p class="sub-size">{{$pedido->tipo_pedido}}</p>
                    </div>

                    <!-- //*Nombre cliente -->
                    <div class="mb-3">
                        <label class="size card-text"><b>Cliente.</b></label>
                        <p class="sub-size">{{$pedido->title}}</p>
                    </div>

                    <!-- //*Abono pedido -->
                    <div class="mb-3">
                        <label class="size card-text"><b>Abono.</b></label>
                        <p class="sub-size">${{$pedido->abono}}</p>
                    </div>

                    <!-- //*Fecha de entrega -->
                    <div class="mb-3">
                        <label class="size card-text"><b>Fecha de entrega.</b></label>
                        <p class="sub-size">{{$pedido->end}}</p>
                    </div>

                    <!-- //*Total -->
                    <div class="mb-3">
                        <label class="size card-text"><b>Total.</b></label>
                        <p class="sub-size">${{$pedido->total}}</p>
                    </div>

                    <!-- //*Descripcion -->
                    <div class="mb-3">
                        <label class="size card-text"><b>Descripcion.</b></label>
                        <p class="sub-size">{{$pedido->descripcion}}</p>
                    </div>

                    <div class="align-self-end">
                        <div class="float-end">
                            <button style="background-color: #FFE59D; border: none; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#updateModal{{$pedido->id}}">Modificar</button>
                            <button style="background-color: #F47C7C; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#destroyModal{{$pedido->id}}">Eliminar</button>
                        </div>
                    </div>
                    
                    
                </form>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card-body">
                <label class="size card-text"><b>Imagen.</b></label>
                <img src="{{ asset($pedido->imagen) }}" class="img-fluid img-thumbnail" alt="Default image">
            </div>
            
        </div>
    </div>

    <!-- {{ $pedido }} -->
</div>

<!-- Modal Eliminar -->
<div class="modal fade" id="destroyModal{{$pedido->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #FFBBBB;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Desea realmente eliminar el pedido de {{$pedido->title}}?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('eliminar_pedido', $pedido->id)}}" method='POST'>
                    @method ('DELETE')
                    @csrf
                        <button type="submit" style="background-color: #F47C7C; border: none; color:black; box-shadow: 2px 2px 5px #999;" class="btn btn-success">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Modificar -->
<div class="modal fade" id="updateModal{{$pedido->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #FFBBBB;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificando el pedido de {{$pedido->title}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('actualizar_pedido', $pedido->id)}}" method='POST' enctype="multipart/form-data">
                    @csrf
                    <select class="form-select" name="tipo_pedido">
                        <option selected value="{{$pedido->tipo_pedido}}">{{$pedido->tipo_pedido}}</option>
                        @if ($pedido->tipo_pedido == "Personalizada")
                            <option value="Predeterminado">Predeterminado</option>
                        @else
                            <option value="Personalizada">Personalizada</option>
                        @endif
                    </select>

                    <div class="mb-3">
                        <label for="contacto" class="form-label">Cliente</label>
                        <div class="input-group mb-3">
                            <input readonly value="{{$pedido->title}}" type="text" class="form-control" name="nombre_cliente" id="name_client_txt" placeholder="Nuevo cliente">
                        </div>
                    </div>
             
                    <div class="mb-3">
                        <label for="contacto" class="form-label">Abono</label>
                        <input type="number" class="form-control" id="contacto" name="abono" value="{{$pedido->abono}}">
                    </div>
            
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Fecha de entrega</label>
                        <input type="date" class="form-control" id="direccion" name="fecha_entrega" value="{{$pedido->start}}">
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="direccion" name="imagen">
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Total</label>
                        <input type="number" class="form-control" id="direccion" name="total_pedido" value="{{$pedido->total}}">
                    </div>

                    <div class="mb-3">
                        <label for="direccion" class="form-label">Descripcion</label>
                        <textarea type="text" class="form-control" id="direccion" name="descripcion">{{$pedido->descripcion}}</textarea>
                    </div>
                        <button type="submit" style="background-color: #97DBAE; border: none; color:black; box-shadow: 2px 2px 5px #999;" class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection