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
                            <option value="null">Default</option>
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

        <div class="col mb-4">
            <img src="{{ asset($pedido->imagen) }}" class="img-fluid img-thumbnail" alt="Default image">
        </div>
    </div>

    {{ $pedido }}
</div>


@endsection