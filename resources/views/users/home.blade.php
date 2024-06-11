@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header w3-padding-16 w3-text-teal">{{ Str::ucfirst(Auth::user()->fname) }}&nbsp;{{ __('Dashboard') }}</div>

                <div class="card-body">
                   @if (count($articles) > 0)
                       <div class="">
                        {{ Auth::user()->fname }} have created {{ $articles->count() }} article(s)
                       </div>
                       @foreach ($articles as $article)
                       <details class=" mb-1 w3-container">
                        <summary class="w3-text-teal">{{ Str::ucfirst($article->title) }}</summary>
                        <p>{{ Str::limit(ucfirst($article->body), 300, " ...") }} <a href="{{ route('articles.show', $article->id) }}">show details</a></p>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger btn-sm">DELETE</button>
                        </form>
                        <small> written by {{ $article->user->fname }}&nbsp; {{ $article->created_at->diffForHumans() }}</small>
                        </details>
                       @endforeach
                   @else
                       <div class=" display-4 d-flex justify-content-center w3-xlarge">
                            <p>You Don't have any article Created</p>
                       </div>
                   @endif

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
