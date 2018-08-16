@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="text-center">Lista de etiquetas</h2>
                        <a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary pull-right">Crear etiqueta</a>
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
                                @foreach($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->id }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td width="10px">
                                            <a href="{{ route('tags.show', $tag->id) }}">Ver</a>
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('tags.edit', $tag->id) }}">Editar</a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
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
                            {{ $tags->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection