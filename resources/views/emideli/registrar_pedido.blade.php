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

    @if(session('muchaplata'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{session('muchaplata')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

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
                    @livewire('form-pedido')
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <script src="{{ asset("js/disable_field.js") }}"></script> -->

@endsection