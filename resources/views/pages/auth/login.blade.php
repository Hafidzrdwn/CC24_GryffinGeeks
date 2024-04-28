@extends('layouts.app')
 
@section('title', 'Login')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
        <div class="card-body">

            <h2 style="color:#00215E;" class="text-center">LOGIN</h2>

            @if($msg = Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                {!! $msg !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <form action="{{ route('auth.login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control @error('email')border-danger @enderror" id="email" name="email" aria-describedby="emailHelp" value="{{old('email')}}">
                @error('email')
                <div class="mt-1 small text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password')border-danger @enderror" id="password" name="password">
                @error('password')
                <div class="mt-1 small text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center">
            <small>Belum mempunyai akun? <a href="{{ route('register.index') }}">Registrasi disini</a></small>
            <button type="submit" class="btn btn-primary">LOGIN</button>
            </div>
            </form>
        </div>
        </div>
    </div>
</div>


@endsection