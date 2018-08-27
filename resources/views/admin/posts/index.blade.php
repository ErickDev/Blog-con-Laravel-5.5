@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="text-center">Lista de mis posts</h2>
                        <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary pull-right">Crear post</a>
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
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td width="10px">
                                            <a href="{{ route('posts.show', $post->id) }}">Ver</a>
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
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
                            {{ $posts->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection