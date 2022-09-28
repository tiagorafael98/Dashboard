@extends('layouts.main')

@section('title', 'Utilizadores')

@section('content')

     <h1>Lista de Utilizadores</h1>
        <table class="table table-bordered table-hover table-responsive">
            <thead class="thead-light">
                <tr>
                    <th>ID do Utilizador</td>
                    <th>E-mail</td>
                    <th>Nome</td>
                    <th>Género</td>
                    <th>Data de Nascimento</td>
                    <th>País</td>
                    <th>Data da Carta</td>
                </tr>
            </thead>

            @foreach ($collection as $item)
            <tr>
                <td>{{$item['id_user']}}</td>
                <td>{{$item['emaill']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['gender_id_gender']}}</td>
                <td>{{$item['birthday']}}</td>
                <td>{{$item['country_id_country']}}</td>
                <td>{{$item['carta_data']}}</td>
            </tr>
            @endforeach
        </table>


@endsection