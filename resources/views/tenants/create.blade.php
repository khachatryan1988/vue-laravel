@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add New tenant') }}</div>

                    <br class="card-body">
                   <form  method="POST" action="{{route('tenants.store')}}>
                       @csrf
                       <div class="row mb-3">
                           <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                           <div class="col-md-6">
                               <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                               @error('name')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                       </div>

                       <div class="row mb-3">
                           <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                           <div class="col-md-6">
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                               @error('email')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>
                       </div>

                       <div class="row mb-3">
                           <label for="domain" class="col-md-4 col-form-label text-md-end">{{ __('domain') }}</label>

                           <div class="col-md-6">
                               <input id="domain" type="domain" class="form-control @error('domain') is-invalid @enderror" name="domain" required autocomplete="domain">

                               @error('domain')
                               <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                               @enderror
                           </div>

                           <div class="row mb-0">
                               <div class="col-md-6 offset-md-4">
                                   <button type="submit" class="btn btn-primary">
                                       {{ __('Save') }}
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

