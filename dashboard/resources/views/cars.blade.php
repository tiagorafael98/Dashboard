@extends('layouts.main')

@section('title', 'Utilizadores')

@section('content')

     <h1>Lista de Carros</h1>
     <table class="table table-bordered table-hover table-responsive">
          <thead>
               <tr>
                    <th>ID</td>
                    <th>Plate Number</td>
                    <th>Plate ID Country</td>
                    <th>model_id_model</td>
                    <th>Year</td>
                    <th>Fuel_id_fuel</td>
                    <th>horsepower</td>
               </tr>
          </thead>
          @foreach ($collection as $item)
          <tr>
               <td>{{$item['id_vehicle']}}</td>
               <td>{{$item['plate_number']}}</td>
               <td>{{$item['plate_id_country']}}</td>
               <td>{{$item['model_id_model']}}</td>
               <td>{{$item['year']}}</td>
               <td>{{$item['fuel_id_fuel']}}</td>
               <td>{{$item['horsepower']}}</td>
          </tr>
          @endforeach
     </table>

@endsection