@extends('includes')

@section('contenido')


<div class="container">
    @if (session('exito'))
        <p class="alert alert-success">{{ session('exito') }}</p>
    @endif

    @error('nombre')
        <p class="alert alert-danger">{{ $message }}</p>
    @enderror
    <div class="card rounded-2 mt-4">
        <form action="{{ route('insertar') }}" method="POST" class="m-3">
            <div class="mb-3">
                @csrf
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" autofocus>
              <input type="hidden" name="session" value="{{ Session::getId() }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        {{ Session::getId() }}
    </div>
</div>


@endsection