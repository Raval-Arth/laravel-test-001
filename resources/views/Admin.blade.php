@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Users Deatils') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                </tr>
                            </thead>
                            @foreach ($users as $user)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ $user['name'] }}</th>
                                        <td scope="row">{{ $user['email'] }}</td>
                                        <td scope="row">{{ $user['phone_number'] }}</td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        {{-- {{ __('You are logged in!') }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
