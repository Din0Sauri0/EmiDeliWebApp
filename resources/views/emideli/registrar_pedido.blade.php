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
                <div class="modal-body">
                    <form method='post'>
                        @csrf
                        <div class="mb-3">
                            <label for="contacto" class="form-label">Cliente</label>
                            <div class="input-group mb-3">
                                <div class="input-group-text">
                                    <input class="form-check-input mt-0" type="checkbox" value="" id="type_field">
                                </div>
                                <input type="text" class="form-control" name="nombre" id="name_client_txt">
                            </div>
                            <select class="form-select" name="nombre" id="name_client_dropbox">
                                <option value="invalid">--Selecciones una opcion--</option>
                                //*insetar option desde la base de datos
                            </select>
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
<<<<<<< HEAD
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
=======
            </div>
>>>>>>> 78d7615b798dbbed0e29f867db31621f33ae2d4b
        </div>
    </div>
</div>



<script src="{{ asset("js/disable_field.js") }}"></script>

@endsection