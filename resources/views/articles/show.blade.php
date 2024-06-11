@extends('layouts.user')

@section('content')
    <div class="card">
            @if ($article->artimage != 'noimage')
                <img class="card-img-top" src="{{ asset('storage/images/'.$article->artimage) }}" alt="image" width="100%", height="20%">
            @endif
        <div class="card-body">
            <h4 class="card-title">{{ Str::ucfirst($article->title) }}</h4>
            <p class="card-text">{{ Str::ucfirst($article->body) }}</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <a href="{{ route('home') }}"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a>
            <a href="{{ route('articles.edit', $article->id) }}"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
        </div>
    </div>
@endsection

