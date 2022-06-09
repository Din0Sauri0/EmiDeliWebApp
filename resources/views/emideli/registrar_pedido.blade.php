@extends('app')

@section('title')
Agregar Pedido
@endsection

@section('content')

<div class="container">
    <div class="row mt-1">
        <div class="col">
            <!-- Button trigger modal -->
            <button style="margin: 15px 0px; background-color: #7FB5FF; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" type="button" class="btn btn-primary end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agendar Pedido
            </button>
        </div>
    </div>



    <!-- //*Carga el calendrio -->
    <div id="fullcalendar" class="mb-3 p-3" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;"></div>

    <!-- Modal -->
    <div class="modal fade modal-dialog-scrollable" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #FFBBBB;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agendar pedido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('registro_pedido') }}" method="POST">
                        @csrf

                        <!-- //TODO Agregar tipo pedido aqui -->
                        <select class="form-select" name="tipo_pedido">
                            <option selected disabled>--Selecciones una opcion--</option>
                            <option value="Personalizada">Personalizada</option>
                            <option value="Predeterminado">Predeterminado</option>
                        </select>

                        <!-- //*Nombre cliente -->
                        <div class="mb-3">
                            <label for="contacto" class="form-label">Cliente</label>
                            <div class="input-group mb-3">
                                <div class="input-group-text">
                                    <input class="form-check-input mt-0" type="checkbox" value="" id="type_field">
                                </div>
                                <input type="text" class="form-control" name="nombre_cliente" id="name_client_txt">
                            </div>
                            <select class="form-select" name="nombre_cliente" id="name_client_dropbox">
                                <option selected disabled>--Selecciones una opcion--</option>
                                @foreach ($clients->all() as $client)
                                <option value="{{$client->id}}">{{$client->nombre}}</option>
                                @endforeach
                                //TODO insetar option desde la base de datos
                            </select>
                        </div>

                        <!-- //*Abono pedido -->
                        <div class="mb-3">
                            <label for="contacto" class="form-label">Abono</label>
                            <input type="number" class="form-control" id="contacto" name="abono">
                        </div>

                        <!-- //*Fecha de entrega -->
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Fecha de entrega</label>
                            <input type="date" class="form-control" id="direccion" name="fecha_entrega">
                        </div>

                        <!-- //*Imagen -->
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Imagen</label>
                            <input type="text" class="form-control" id="direccion" name="imagen">
                        </div>

                        <!-- //*Total -->
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Total</label>
                            <input type="number" class="form-control" id="direccion" name="total_pedido">
                        </div>

                        <!-- //*Descripcion -->
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Descripcion</label>
                            <textarea type="text" class="form-control" id="direccion" name="descripcion"></textarea>
                        </div>

                        <button type="submit" style="background-color: #97DBAE; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset("js/disable_field.js") }}"></script>

@endsection