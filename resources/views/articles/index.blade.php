@extends('layouts.user')

@section('content')
  <div class=" jumbotron d-flex justify-content-center">
    <a href="{{ route('articles.create') }}" class=" btn btn-lg btn-success">Create Article</a>
  </div>
@endsection
