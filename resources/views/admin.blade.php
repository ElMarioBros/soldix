@extends('includes')

@section('contenido')

<div class="container mt-4">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Sesion</th>
            <th scope="col">IP</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($solicitudes as $solicitud)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $solicitud->nombre }}</td>
                    <td>{{ $solicitud->sessionid }}</td>
                    <td>{{ $solicitud->ip }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>    
</div>


@endsection