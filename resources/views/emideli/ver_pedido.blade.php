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
                        <p class="sub-size">{{$pedido->start}}</p>
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
            <div class="card-body d-flex" style="display:flex; flex-direction:column;">
                <label class="size card-text mb-2"><b>Imagen.</b></label>
                <img src="{{ asset($pedido->imagen) }}" style="max-height:500px" class="img-fluid img-thumbnail" alt="Default image">
            </div>
            
        </div>
    </div>

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
                @livewire('form-edit-pedido', ['pedido' => $pedido])
            </div>
        </div>
    </div>
</div>


@endsection