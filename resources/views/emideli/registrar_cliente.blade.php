@extends('app')

@section('title')
Agregar cliente
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button style="margin: 15px 0px; background-color: #7FB5FF; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" type="button" class="btn btn-primary end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar cliente
            </button>
        </div>
    </div>


    @if(session('destroy'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('destroy')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('update'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('update')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row row-cols-1 row-cols-md-3 g-4">

        @foreach ($clients->all() as $client)
        <div class="col">
            <div class="card h-100" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                <div class="card-header">
                    <h4 class="card-title">{{$client->nombre}}</h4>
                </div>
                <div class="card-body class-title">
                    <p class="card-text"><b>Contacto: </b>{{$client->contacto}}</p>
                    <p class="card-text"><b>Dirección: </b>{{$client->direccion}}</p>
                </div>
                <div class="card-footer">
                    <button style="background-color: #F47C7C; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#destroyModal{{$client->id}}">Eliminar</button>
                    <button style="background-color: #FFE59D; border: none; border: none; box-shadow: 2px 2px 5px #999;" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateModal{{$client->id}}">Modificar</button>
                </div>
            </div>
        </div>

        <!-- Modal Eliminar -->
        <div class="modal fade" id="destroyModal{{$client->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #FFBBBB;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Desea realmente eliminar a {{$client->nombre}}?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('eliminar_cliente', $client->id)}}" method='POST'>
                            @method ('DELETE')
                            @csrf
                            <button type="submit" style="background-color: #F47C7C; border: none; color:black; box-shadow: 2px 2px 5px #999;" class="btn btn-success">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Modificar -->
        <div class="modal fade" id="updateModal{{$client->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #FFBBBB;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modificando a {{$client->nombre}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('actualizar_cliente', $client->id)}}" method='POST'>
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$client->nombre}}">
                            </div>
                            <div class="mb-3">
                                <label for="contacto" class="form-label">Contacto</label>
                                <input type="text" class="form-control" id="contacto" name="contacto" value="{{$client->contacto}}">
                            </div>
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="{{$client->direccion}}">
                            </div>
                            <button type="submit" style="background-color: #97DBAE; border: none; color:black; box-shadow: 2px 2px 5px #999;" class="btn btn-success">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>


</div>



<!-- Modal Agregar cliente -->
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
                    <button type="submit" style="background-color: #97DBAE; border: none;color:black; box-shadow: 2px 2px 5px #999;" class="btn btn-success">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>









@endsection