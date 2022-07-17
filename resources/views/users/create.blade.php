@extends('layouts.app')

@section('content')
    <form method="POST" action="#">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('password') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name">

               <span class="invalid-feedback error-name" role="alert"></span>
          
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                <span class="invalid-feedback error-email" role="alert"></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

            <div class="col-md-6">
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="phone"   autocomplete="phone" autofocus>

                <span class="invalid-feedback error-phone" role="alert"></span>
            </div>
        </div>
        <div class="form-group row">
            <label for="adress" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

            <div class="col-md-6">
                <input  type="text" class="form-control @error('adress') is-invalid @enderror" name="address" autocomplete="address" autofocus>

                <span class="invalid-feedback error-address" role="alert"></span>

            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary" id="btn-save">
                    {{ __('Submit') }}
                </button>
            </div>
        </div>
    </form>

@endsection
@push('js')
    <script src="{{ asset('js/user.js') }}" ></script>
@endpush