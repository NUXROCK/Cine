@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="card">
        <h5 class="card-header">categorias</h5>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categoria as $item)
<div>
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $item->nombre}}</td>
        <td>{{ $item->descripcion}}</td>
        <td>
            <a href="{{url('categorias/'.$item->id.'/edit')}}">
                <button class="btn btn-primary"><i class="fas fa-pencil-alt"></i>Editar</button>
            </a>
        </td>
    </tr>
</div>
@endforeach
                </tbody>
            </table>    
        </div>
      </div>
 </div>
@endsection