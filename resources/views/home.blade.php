@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $post->title }}
                    </div>

                    <div class="panel-body">
                        @if($post->file)
                            <img src="{{ $post->file }}" alt="img-post" class="img-responsive">
                        @endif
                        {{ $post->excerpt }}
                        <a href="{{ route('post', $post->slug) }}" class="pull-right">Leer más...</a>
                        <b>{{ $post->category->name }}</b>
                    </div>
                </div>
            @endforeach
            {{ $posts->render() }}
        </div>
    </div>
</div>
@endsection
