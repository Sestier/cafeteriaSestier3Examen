@extends('layouts.default')

@section('content')
    <h1>Estado de Pedidos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Descripcion del Pedido</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidosCocinero as $Cocinero)
                <tr>
                    <td>{{$Cocinero->idUsuario}}</td>
                    <td>{{$Cocinero->total}}</td>
                    <td>{{$estadosPedido[$pedido->idEstadoPedido]}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection