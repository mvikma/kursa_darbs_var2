@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="login">
                        @csrf

                        <div class="form-group row">
                            <label for="vards" class="col-md-4 col-form-label text-md-right">Vards</label>

                            <div class="col-md-6">
                                <input id="vards" type="text" class="form-control @error('vards') is-invalid @enderror" name="vards" value="{{ old('vards') }}" required >

                                @error('vards')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Nepareizi ievadīti dati</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="uzvards" class="col-md-4 col-form-label text-md-right">Uzvards</label>

                            <div class="col-md-6">
                                <input id="uzvards" type="text" class="form-control @error('uzvards') is-invalid @enderror" name="uzvards" value="{{ old('uzvards') }}" required >

                                @error('uzvards')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Nepareizi ievadīti dati</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Parole</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Nepareizi ievadīti dati</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
