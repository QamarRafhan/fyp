@extends('layouts.app', ['activePage' => 'donor.view', 'titlePage' => __('Donor Details')])

@section('content')
<div class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">

        <div class="card ">
          <div class="card-header card-header-primary">
            <h4 class="card-title">{{ __('Donor') }}</h4>
            <p class="card-category">{{ __('details') }}</p>
          </div>
          <div class="card-body ">
            @if (session('status_password'))
            <div class="row">
              <div class="col-sm-12">
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                  </button>
                  <span>{{ session('status_password') }}</span>
                </div>
              </div>
            </div>
            @endif



            <div class="row">
              <label class="col-sm-2 col-form-label  text-primary">Name</label>
              <div class="col-sm-7">
                <div class="form-group bmd-form-group is-filled">
                  <p>{{$donor->name}}</p>
                </div>
              </div>
            </div>
   
            <div class="row">
              <label class="col-sm-2 col-form-label  text-primary">Mobile</label>
              <div class="col-sm-7">
                <div class="form-group bmd-form-group is-filled">
                  <p>{{$donor->mobile}}</p>
                </div>
              </div>
            </div>
             <div class="row">
              <label class="col-sm-2 col-form-label  text-primary">Email</label>
              <div class="col-sm-7">
                <div class="form-group bmd-form-group is-filled">
                  <p>{{$donor->email}}</p>
                </div>   
              </div>
            </div>
             <div class="row">
              <label class="col-sm-2 col-form-label  text-primary">Address</label>
              <div class="col-sm-7">
                <div class="form-group bmd-form-group is-filled">
                  <p>{{$donor->address}}</p>
                </div>
              </div> 
            </div>
             <div class="row">
              <label class="col-sm-2 col-form-label  text-primary">User Name</label>
              <div class="col-sm-7">
                <div class="form-group bmd-form-group is-filled">
                  <p>{{$donor->username}}</p>
                </div>
              </div>  
            </div>
             <div class="row">
              <label class="col-sm-2 col-form-label  text-primary">Password</label>
              <div class="col-sm-7">
                <div class="form-group bmd-form-group is-filled">
                  <p>{{$donor->password}}</p>
                </div>
              </div> 
            </div>
             <div class="row">
              <label class="col-sm-2 col-form-label  text-primary">Creation date</label>
              <div class="col-sm-7">
                <div class="form-group bmd-form-group is-filled">
                  <p>{{$donor->created_at}}</p>
                </div> 
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection