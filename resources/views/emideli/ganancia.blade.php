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

            <div class="card-group">
                <form action="{{ route('ganancia_between') }}" method="POST" class="row">
                    @csrf
                    <div class="mb-3 col">
                        <label for="start_date" class="form-label">Inicio</label>
                        <input type="date" class="form-control" id="direccion" name="start_date" style="box-shadow: 2px 2px 5px #999;">
                    </div>
                    <div class="mb-3 col">
                        <label for="end_date" class="form-label">Fin</label>
                        <input type="date" class="form-control" id="direccion" name="end_date" style="box-shadow: 2px 2px 5px #999;">
                    </div>
                    <div class="mb-3 col d-flex align-items-end">
                        <button style="background-color: #7FB5FF; border: none; color: black; border: none; box-shadow: 2px 2px 5px #999;" type="submit" class="btn btn-primary end">
                            Buscar
                        </button>
                    </div>
                </form>
            </div>

            <div class="p-2 card-group mt-4" style="border: none; box-shadow: 2px 2px 5px #999; background-color: #FFC4DD; border-radius: 5px;">
                <table class="table">
                    <thead>
                        <th>Mes</th>
                        <th>Año</th>
                        <th>Total</th>
                    </thead>
                    @empty($ganancia_between)
                    <tbody>
                        @foreach ($ganancias as $ganancia)
                        <tr class="table-active">
                            <td>{{$ganancia->mes}}</td>
                            <td>{{$ganancia->year}}</td>
                            <td>{{$ganancia->total}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @else
                    <tbody>
                        @foreach ($ganancia_between as $ganancia)
                        <tr class="table-active">
                            <td>{{$ganancia->mes}}</td>
                            <td>{{$ganancia->year}}</td>
                            <td>{{$ganancia->total}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endempty

                </table>
                @empty(!$ganancias)
                <div class="d-flex justify-content-center-end">
                    {!! $ganancias->links() !!}
                </div>
                @endempty
                

            </div>
        </div>
    </div>
</div>
@endsection