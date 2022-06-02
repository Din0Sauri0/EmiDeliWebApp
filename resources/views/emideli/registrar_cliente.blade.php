@extends('app')

@section('title')
Agregar cliente
@endsection

@section('content')
<!-- recordar borrar la navbar -->
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
    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button style="margin: 15px 0px; background-color: #7FB5FF; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" type="button" class="btn btn-primary end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar cliente
            </button>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                <div class="card-header">
                    <h5 class="card-title">Nombre cliente</h5>
                </div>
                <div class="card-body class-title">
                    <p class="card-text">Contacto</p>
                    <div class="card-text">Dirección</div>
                </div>
                <div class="card-footer">
                    <a href="#" style="background-color: #F47C7C; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-danger">Eliminar</a>
                    <a href="#" style="background-color: #FFE59D; border: none; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-warning">Modificar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                <div class="card-header">
                    <h5 class="card-title">Nombre cliente</h5>
                </div>
                <div class="card-body class-title">
                    <p class="card-text">Contacto</p>
                    <div class="card-text">Dirección</div>
                </div>
                <div class="card-footer">
                    <a href="#" style="background-color: #F47C7C; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-danger">Eliminar</a>
                    <a href="#" style="background-color: #FFE59D; border: none; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-warning">Modificar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                <div class="card-header">
                    <h5 class="card-title">Nombre cliente</h5>
                </div>
                <div class="card-body class-title">
                    <p class="card-text">Contacto</p>
                    <div class="card-text">Dirección</div>
                </div>
                <div class="card-footer">
                    <a href="#" style="background-color: #F47C7C; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-danger">Eliminar</a>
                    <a href="#" style="background-color: #FFE59D; border: none; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-warning">Modificar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                <div class="card-header">
                    <h5 class="card-title">Nombre cliente</h5>
                </div>
                <div class="card-body class-title">
                    <p class="card-text">Contacto</p>
                    <div class="card-text">Dirección</div>
                </div>
                <div class="card-footer">
                    <a href="#" style="background-color: #F47C7C; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-danger">Eliminar</a>
                    <a href="#" style="background-color: #FFE59D; border: none; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-warning">Modificar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                <div class="card-header">
                    <h5 class="card-title">Nombre cliente</h5>
                </div>
                <div class="card-body class-title">
                    <p class="card-text">Contacto</p>
                    <div class="card-text">Dirección</div>
                </div>
                <div class="card-footer">
                    <a href="#" style="background-color: #F47C7C; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-danger">Eliminar</a>
                    <a href="#" style="background-color: #FFE59D; border: none; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-warning">Modificar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                <div class="card-header">
                    <h5 class="card-title">Nombre cliente</h5>
                </div>
                <div class="card-body class-title">
                    <p class="card-text">Contacto</p>
                    <div class="card-text">Dirección</div>
                </div>
                <div class="card-footer">
                    <a href="#" style="background-color: #F47C7C; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-danger">Eliminar</a>
                    <a href="#" style="background-color: #FFE59D; border: none; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-warning">Modificar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                <div class="card-header">
                    <h5 class="card-title">Nombre cliente</h5>
                </div>
                <div class="card-body class-title">
                    <p class="card-text">Contacto</p>
                    <div class="card-text">Dirección</div>
                </div>
                <div class="card-footer">
                    <a href="#" style="background-color: #F47C7C; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-danger">Eliminar</a>
                    <a href="#" style="background-color: #FFE59D; border: none; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-warning">Modificar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                <div class="card-header">
                    <h5 class="card-title">Nombre cliente</h5>
                </div>
                <div class="card-body class-title">
                    <p class="card-text">Contacto</p>
                    <div class="card-text">Dirección</div>
                </div>
                <div class="card-footer">
                    <a href="#" style="background-color: #F47C7C; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-danger">Eliminar</a>
                    <a href="#" style="background-color: #FFE59D; border: none; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-warning">Modificar</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                <div class="card-header">
                    <h5 class="card-title">Nombre cliente</h5>
                </div>
                <div class="card-body class-title">
                    <p class="card-text">Contacto</p>
                    <div class="card-text">Dirección</div>
                </div>
                <div class="card-footer">
                    <a href="#" style="background-color: #F47C7C; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-danger">Eliminar</a>
                    <a href="#" style="background-color: #FFE59D; border: none; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-warning">Modificar</a>
                </div>
            </div>
        </div>
        

</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #FFBBBB;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('registro_cliente') }}" method='POST'>

                    @csrf
                    
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="contacto" class="form-label">Contacto</label>
                        <input type="text" class="form-control" id="contacto" name="contacto">
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>
                    <button type="submit" style="background-color: #97DBAE; border: none; box-shadow: 2px 2px 5px #999;" class="btn btn-success">Guardar</button>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>

@endsection