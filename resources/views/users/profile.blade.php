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
        <div class="w3-twothird">
            <div class="w3-display-container">
                <div class="w3-card mb-1">
                    <div class="w3-row w3-section w3-padding-16">
                        <div class="w3-col w3-center" id="clovis">
                            <i class="fa fa-address-book w3-text-blue w3-large" aria-hidden="true"></i>
                        </div>
                        <div class="w3-rest">
                            <div class=" w3-text-blue w3-large" id="master">
                                Address <span id="hidContact"><i class="fa fa-edit w3-text-blue" aria-hidden="true"></i></span>
                            </div>
                           <div class="w3-light-gray" id="contactForm">
                                <div class="card">
                                    <div class="card-header">
                                        Update Contact
                                    </div>
                                </div>
                            <form action="" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="addr" class=" mb-1"> <br>
                                    <input type="text" name="city" class=" mb-1"> <br>
                                    <input type="text" name="state" class=" mb-1"> <br>
                                    <input type="text" name="zipcode" class=" mb-1"> <br>
                                    <input type="text" name="country" class=" mb-1"> <br>
                                </div>
                                <div class="form-group d-flex justify-content-end">
                                    <button type="submit" class="btn btn-sm btn-primary">update</button>
                                </div>
                            </form>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="w3-card-2 mb-2">
                    <div class="w3-row w3-section">
                        <div class="w3-col w3-center" id="clovis">
                            <i class="fa fa-home w3-text-blue w3-large" aria-hidden="true"></i>
                        </div>
                        <div class="w3-rest">
                            clovis
                        </div>
                    </div>
                </div>
                <div class="w3-card-2 mb-2">
                    <div class="w3-row w3-section">
                        <div class="w3-col w3-center" id="clovis">
                            <i class="fa fa-home w3-text-blue w3-large" aria-hidden="true"></i>
                        </div>
                        <div class="w3-rest">
                            clovis
                        </div>
                    </div>
                </div>
                <div class="w3-card-2 mb-2">
                    <div class="w3-row w3-section">
                        <div class="w3-col w3-center" id="clovis">
                            <i class="fa fa-home w3-text-blue w3-large" aria-hidden="true"></i>
                        </div>
                        <div class="w3-rest">
                            clovis
                        </div>
                    </div>
                </div>
                <div class="w3-card-2 mb-2">
                    <div class="w3-row w3-section">
                        <div class="w3-col w3-center" id="clovis">
                            <i class="fa fa-home w3-text-blue w3-large" aria-hidden="true"></i>
                        </div>
                        <div class="w3-rest">
                            clovis
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

