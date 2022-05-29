@extends('app')

@section('title')
Agregar Pedido
@endsection

@section('content')
<!-- ! recordar borrar la navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="max-height: 70px; background-color: #E78EA9;">
    <div class="container-fluid">
        <!-- modificar el logo -->
        <a href="#">
            <img src="{{ asset('img/Logo.png') }}" style=" border-color: #eee; height: 100px; width: 200px;">
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
        <div class="col card m-1" style="max-width: 300px;">
            <div class="card-body">
                This is some text within a card body.
            </div>
        </div>

        <div class="col card m-1" style="max-width: 300px;">
            <div class="card-body">
                This is some text within a card body.
            </div>
        </div>
    </div>








    <!-- Modal -->
    <div class="modal fade modal-dialog-scrollable" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #FFBBBB;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agendar pedido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Tipo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"> <!-- cambiar por chexbox o combobox -->
                        </div>
                        <div class="mb-3">
                            <label for="contacto" class="form-label">Abono</label>
                            <input type="text" class="form-control" id="contacto" name="contacto">
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Fecha de entrega</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Fecha de creacion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Imagen</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Total</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                        <button type="submit" style="background-color: #97DBAE; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection