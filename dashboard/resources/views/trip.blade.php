@extends('layouts.main')

@section('title', 'Viagens')

@section('content')

     <h1>Lista de Viagens</h1>
        <table class="table table-bordered table-hover table-responsive">
            <thead class="thead-light">
                <tr>
                    <th>ID da viagem</td>
                    <th>ID do veículo</td>
                    <th>ID do utilizador</td>
                    <th>Ínicio da viagem</td>
                </tr>
            </thead>

            @foreach ($collection as $item)
            <tr>
                <td>{{$item['id_trip']}}</td>
                <td>{{$item['vehicle_id_vehicle']}}</td>
                <td>{{$item['user_id_user']}}</td>
                <td>{{$item['timestamp_begin']}}</td>
            </tr>
            @endforeach
        </table>


@endsection