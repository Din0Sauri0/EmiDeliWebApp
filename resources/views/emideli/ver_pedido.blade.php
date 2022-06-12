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

                    <!-- //TODO Agregar tipo pedido aqui -->
                    <div class="mb-3">
                        <!-- <p class="size card-text"><b>Tipo de pedido: </b>{{$pedido->tipo_pedido}}</p> -->
                        <label class="size card-text"><b>Tipo de pedido.</b></label>
                        <p class="sub-size">{{$pedido->tipo_pedido}}</p>
                    </div>
                    <!-- <select class="form-select" name="tipo_pedido">
                        <option selected disabled>--Selecciones una opcion--</option>
                        <option value="Personalizada">Personalizada</option>
                        <option value="Predeterminado">Predeterminado</option>
                    </select> -->

                    <!-- //*Nombre cliente -->
                    <div class="mb-3">
                        <!-- <p class="size card-text"><b>Cliente: </b>{{$pedido->title}}</p> -->
                        <label class="size card-text"><b>Cliente.</b></label>
                        <p class="sub-size">{{$pedido->title}}</p>
                        <!-- <h3>Cliente: {{$pedido->title}}</h3> -->
                        <!-- <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" value="" id="type_field">
                            </div>
                            <input type="text" class="form-control" name="nombre_cliente" id="name_client_txt">
                        </div>
                        <select class="form-select" name="nombre_cliente" id="name_client_dropbox">
                            <option selected disabled>--Selecciones una opcion--</option>
                            <option value="null">Default</option>
                            //TODO insetar option desde la base de datos
                        </select> -->
                    </div>

                    <!-- //*Abono pedido -->
                    <div class="mb-3">
                        <!-- <h3>Abono: ${{$pedido->abono}}</h3> -->
                        <!-- <p class="size card-text"><b>Abono: </b>${{$pedido->abono}}</p> -->
                        <label class="size card-text"><b>Abono.</b></label>
                        <p class="sub-size">${{$pedido->abono}}</p>
                        <!-- <label for="contacto" class="form-label">Abono</label>
                        <input type="number" class="form-control" id="contacto" name="abono"> -->
                    </div>

                    <!-- //*Fecha de entrega -->
                    <div class="mb-3">
                        <!-- <h3>Fecha de entrega: {{$pedido->end}}</h3> -->
                        <label class="size card-text"><b>Fecha de entrega.</b></label>
                        <p class="sub-size">{{$pedido->end}}</p>
                        <!-- <label for="direccion" class="form-label">Fecha de entrega</label>
                        <input type="date" class="form-control" id="direccion" name="fecha_entrega"> -->
                    </div>

                    <!-- //*Imagen -->
                    <!-- <div class="mb-3">

                        <label for="direccion" class="form-label">Imagen</label>
                        <input type="text" class="form-control" id="direccion" name="imagen">
                    </div> -->

                    <!-- //*Total -->
                    <div class="mb-3">
                        <!-- <h3>Total: ${{$pedido->total}}</h3> -->
                        <!-- <p class="size card-text"><b>Total: </b>${{$pedido->total}}</p> -->
                        <label class="size card-text"><b>Total.</b></label>
                        <p class="sub-size">${{$pedido->total}}</p>
                        <!-- <label for="direccion" class="form-label">Total</label>
                        <input type="number" class="form-control" id="direccion" name="total_pedido"> -->
                    </div>

                    <!-- //*Descripcion -->
                    <div class="mb-3">
                    <!-- <h3>Descripcion: {{$pedido->descripcion}}</h3> -->
                        <label class="size card-text"><b>Descricion.</b></label>
                        <p class="sub-size">{{$pedido->descripcion}}</p>
                        <!-- <label for="direccion" class="form-label">Descripcion</label>
                        <textarea type="text" class="form-control" id="direccion" name="descripcion"></textarea> -->
                    </div>

                    <div class="align-self-end">
                        <button type="submit" style="background-color: #97DBAE; color: black; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-success">Guardar</button>
                        <div class="float-end">
                            <button style="background-color: #FFE59D; border: none; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-warning">Modificar</button>
                            <button style="background-color: #F47C7C; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-danger">Eliminar</button>
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


@endsection