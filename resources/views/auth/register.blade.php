@extends('layouts.app')

@section('content')
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <div class="card-header mb-8 text-3xl text-center">Sign Up</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="name" placeholder="Name" type="text" class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6">
                                <input id="email" placeholder="Email" type="email" class="block border border-grey-light w-full p-3 rounded mb-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6">
                                <input id="password" placeholder="Password" type="password" class="block border border-grey-light w-full p-3 rounded mb-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class=" block border border-grey-light w-full p-3 rounded mb-4 form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="w-full text-center py-3 rounded bg-blue-800 text-white hover:bg-green-dark focus:outline-none my-1">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-grey-dark mt-6">
                Already have an account?
                <a class="no-underline border-b border-blue text-blue-500" href="/login">
                    Log in
                </a>.
            </div>
        </div>
    </div>
</div>

@endsection
