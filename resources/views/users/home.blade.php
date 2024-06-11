@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- start of home heading --}}
            <div class="card">
                <div class="card-header w3-xlarge w3-padding-24 w3-text-blue">
                    {{ Str::ucfirst(Auth::user()->fname) }}

                    {{ __('Dashboard') }}
                </div>
                {{-- end of home heading --}}
                <div class="card-body">
                   @if (count($articles) > 0)
                       <div class=" mb-1">
                        {{ Auth::user()->fname }} have created {{ $articles->count() }} article(s)
                       </div>
                       @foreach ($articles as $article)
                       <details class=" mb-1 w3-container">
                        <summary class="w3-text-teal">{{ Str::ucfirst($article->title) }}</summary>
                        <div class="">
                            {{ Str::limit(ucfirst($article->body), 300, " ...") }}
                             <a href="{{ route('articles.show', $article->id) }}">show details</a>
                        </div>
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
