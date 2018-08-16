@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="text-center">Crear nueva etiqueta</h2>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'tags.store']) !!}
                            @include('admin.tags.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection