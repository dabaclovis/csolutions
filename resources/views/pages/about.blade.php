@extends('layouts.app')

@section('content')
    About me

    <br>

    @if ($path != "")
      your key is   {{ $path }}
    @else
        {{ 'there is not key' }}
    @endif
@endsection
