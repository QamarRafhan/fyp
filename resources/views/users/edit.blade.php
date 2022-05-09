@extends('layouts.app', ['activePage' => 'user.create', 'titlePage' => __('Create User')])

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">

                @if ($user->id)
                <form method="post" action="{{ route('user.update', ['user' => $user->id]) }}" class="form-horizontal">
                    @method('PUT')
                    @else
                    <form method="post" action="{{ route('user.store') }}" class="form-horizontal">
                        @endif
                        @csrf
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('User') }}</h4>
                                <p class="card-category">{{ __('create') }}</p>
                            </div>
                            <div class="card-body ">
                                @if (session('status_success'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status_success') }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                         
                             
    
                                <div class="row">
                                    <label class="col-sm-2 col-form-label" for="name">{{ __(' Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" id="name" placeholder="{{ __('Name ') }}" value="{{ old('name', $user->name) }}" required />
                                            @if ($errors->has('name'))
                                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label" for="mobile">{{ __(' Mobile') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('mobile') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" type="number" name="mobile" id="mobile" placeholder="{{ __('Mobile ') }}" value="{{ old('mobile', $user->mobile) }}" required />
                                            @if ($errors->has('mobile'))
                                            <span id="mobile-error" class="error text-danger" for="input-mobile">{{ $errors->first('mobile') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label" for="email">{{ __(' Email') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" id="email" placeholder="{{ __('Email ') }}" value="{{ old('email', $user->email) }}" required />
                                            @if ($errors->has('email'))
                                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <label class="col-sm-2 col-form-label" for="username">{{ __(' City') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" name="city" id="city" placeholder="{{ __('City ') }}" value="{{ old('city', $user->city) }}" required />
                                            @if ($errors->has('city'))
                                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('city') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            
                            </div>

                        </div>
                     </div>
                  </div>


        <div class="card-footer ml-auto mr-auto ">
            <div class="row">
                <div class="col-4">
                    <a href="{{ route('user.index') }}" class="btn btn-primary">{{ __('Cancel') }}</a>
                </div>
                <div class="col-4 text-center">
                </div>
                <div class="col-4  text-right">
                    <button type="submit" class="btn btn-primary">{{ $user->id ? __('Update') : __('Create') }}</button>
                </div>

            </div>

        </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection


@push('js')

<style>
    .border-tr {
        border-top: 1px solid #dee2e6;
        border-right: solid 1px #dee2e6;
        border-bottom: solid 1px #dee2e6;

    }

    .border-tr:last-child {
        border-right: solid 0px;
    }
</style>
@endpush