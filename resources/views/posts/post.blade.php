@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $post->title }}</h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Categoría</span>
                    <a href="#">{{ $post->category->name }}</a>
                </div>

                <div class="panel-body">
                    @if($post->file)
                        <img src="{{ $post->file }}" alt="img-post" class="img-responsive">
                    @endif
                    {{ $post->body }}
                    <hr>
                    @foreach($post->tags as $tag)
                        <a href="#" class="label label-primary">{{ $tag->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
