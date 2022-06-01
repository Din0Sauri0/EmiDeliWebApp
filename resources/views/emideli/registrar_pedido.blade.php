@extends('app')

@section('title')
Agregar Pedido
@endsection

@section('content')
<!-- ! recordar borrar la navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="max-height: 70px; background-color: #E78EA9;">
    <div class="container-fluid">
        <a href="#">
            <img src="{{ asset('img/Logo.png') }}" style=" border-color: #eee;padding: 0px; margin: 0px; height: 45px; width: 130px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row mt-1">
        <div class="col">
            <!-- Button trigger modal -->
            <button style="margin: 15px 0px; background-color: #7FB5FF; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" type="button" class="btn btn-primary end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agendar Pedido
            </button>
        </div>
        <!-- <div class="col card m-1" style="max-width: 300px;">
            <div class="card-body">
                This is some text within a card body.
            </div>
        </div>

        <div class="col card m-1" style="max-width: 300px;">
            <div class="card-body">
                This is some text within a card body.
            </div>
        </div> -->
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
                    <form action="{{ route('prueba')}}" method="POST">
                        @csrf

                        <!-- //TODO Agregar tipo pedido aqui -->
                        <div class="mb-3">
                            <label for="contacto" class="form-label">Tipo pedido</label>
                            <input type="text" class="form-control" id="contacto" name="tipo_pedido">
                        </div>
                        
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
                                <option value="invalid">--Selecciones una opcion--</option>
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