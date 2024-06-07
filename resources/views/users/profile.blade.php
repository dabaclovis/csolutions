@extends('layouts.user')

@section('content')
    <div class=" w3-row-padding">
        <div class="w3-third">
            <div class="w3-container w3-card">
                    @if (Auth::user()->avatar)
                        <div class="w3-display-container">
                            <img src="{{ asset('storage/users/'.Auth::user()->avatar) }}" alt="profile" width="100%" class="w3-round-large m-2">
                            <div class="w3-dark-gray w3-display-topright mt-3 w3-round-large w3-padding pt-2">
                                {{ Str::ucfirst($user->fname) }}, {{ Str::ucfirst($user->lname) }}
                            </div>
                        </div>
                    @endif
                <hr>
                <div class=" mt-2 mb-3">
                    <form action="{{ route('users.avatar') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class=" d-flex justify-content-between">
                            <input type="file" name="avatar">
                            <button class=" btn btn-success btn-sm" type="submit">upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="w3-twothird">right</div>
    </div>
@endsection

