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
                        <div class="w3-display-container">
                            <div class="w3-row w3-section">
                                <div class="w3-col w3-center w3-xlarge" id="clovis">
                                    <i class="fa fa-home w3-text-blue" aria-hidden="true"></i>
                                </div>
                                <div class="w3-rest mt-2">
                                        {{ Str::ucfirst($user->fname) }},&nbsp;{{ Str::ucfirst($user->lname) }}
                                          <span id="homedit"><i class="fa fa-edit w3-text-blue" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
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
        <div class="w3-twothird">
            <div class="w3-container">
                <div class="w3-row w3-section">
                    <div class="w3-col w3-center w3-text-blue w3-xlarge mt-0" id="clovis">
                        <i class="fa fa-address-card-o " aria-hidden="true"></i>
                    </div>
                    <div class="w3-rest pt-2">
                        <span class=" w3-text-blue">  Address</span>
                        <div class="" id="hidAddr">
                            6287 sunderland drive <br>
                            Columbus, Ohio 43229. <br>
                            united states. <span><i class="fa fa-edit w3-text-teal" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col w3-center w3-text-blue w3-xlarge mt-0" id="clovis">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="w3-rest pt-2">
                      <span class=" w3-text-blue">  Your Details</span> <br>
                      {{ Str::ucfirst($user->fname) }},&nbsp; {{ Str::ucfirst($user->lname) }} <br>
                      {{ $user->email }}
                      <div>
                        {{ $user->mobile }}
                        <span id="mobileUpdate"><i class="fa fa-edit w3-text-teal" aria-hidden="true"></i></span>
                            <div class="" id="mobileContact">
                                <form action="{{ route('users.mobile') }}" method="post">
                                    @csrf
                                    <div class="">
                                        <input type="text" placeholder="update mobile" name="mobile">
                                        <button type="submit" class="btn mb-1 btn-sm btn-primary">update</button>
                                    </div>
                                </form>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

