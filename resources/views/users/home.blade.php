@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <details>
                        <summary>the scmable</summary>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ipsam ea velit expedita fugit consectetur illo provident,
                             deserunt fuga repudiandae. Eius sunt animi quaerat delectus!</p>

                    </details>

                    <dl>
                        <dt>Sujects</dt>
                        <dd>
                            - sub headings

                            &#128568
                        </dd>
                    </dl>
                    <table>
                        <tr>
                            <th>Cameron</th>
                            <th>Nigeria</th>
                            <th>Ghana</th>
                        </tr>
                        <tr>
                            <td>Yaounde</td>
                            <td>Abuja</td>
                            <td>Accra</td>
                        </tr>
                        <tr>
                            <td>Douala</td>
                            <td>Lagos</td>
                            <td>Kumasi</td>
                        </tr>
                    </table>
                    <style>
                        table, th, td{
                            border: 1px solid black;
                            border-collapse: collapse;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
