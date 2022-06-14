@extends('app')

@section('title')
Agregar Pedido
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-group mt-4">
                <div class="d-flex justify-content-center align-items-center card m-3" style="font-size: 30px; border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                    <div class="card-body">
                        <h3>Mes Actual</h3>
                        <label style="color: green;">${{$total_current_month}}</label>
                    </div>
                </div>
                <div class="d-flex justify-content-center align-items-center card m-3" style="font-size: 30px; border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                    <div class="card-body">
                        <h3>Mes Pasado</h3>
                        <label style="color: green;">${{$total_last_month}}</label>
                    </div>
                </div>
            </div>
            <div class="p-2 card-group mt-4" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                <table class="table">
                    <thead>
                        <th>Mes</th>
                        <th>Año</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        @foreach ($ganancias as $ganancia)
                        <tr class="table-active">
                            <td>{{$ganancia->mes}}</td>
                            <td>{{$ganancia->year}}</td>
                            <td>{{$ganancia->total}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-center-end">
                    {!! $ganancias->links() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection