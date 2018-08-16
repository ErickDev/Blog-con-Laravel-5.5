@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="text-center">Lista de categorías</h2>
                        <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary pull-right">Crear etiqueta</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width='10px'>Id</th>
                                    <th>Nombre</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td width="10px">
                                            <a href="{{ route('categories.show', $category->id) }}">Ver</a>
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('categories.edit', $category->id) }}">Editar</a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">
                                                    Eliminar
                                                </button>
                                            {!! form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {{ $categories->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection