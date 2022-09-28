@extends('layouts.main')

@section('title', 'Veículos')

@section('content')

     <h1>Lista de Veículos</h1>
        <table class="table table-bordered table-hover table-responsive">
            <thead class="thead-light">
                <tr>
                    <th>ID do veículo</td>
                    <th>Veículo</td>
                </tr>
            </thead>

            @foreach ($collection as $item)
            <tr>
                <td>{{$item['id_brand']}}</td>
                <td>{{$item['brand_name']}}</td>
            </tr>
            @endforeach
        </table>


@endsection