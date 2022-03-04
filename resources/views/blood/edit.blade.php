@extends('layouts.app', ['activePage' => 'blood.create', 'titlePage' => __('Createblood')])

@section('content')
<div class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">

        @if($blood->id)
        <form method="post" action="{{ route('blood.update', ['blood' => $blood->id]) }}" class="form-horizontal">
          @method('PUT')

          @else
          <form method="post" action="{{ route('blood.store') }}" class="form-horizontal">
            @endif
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('blood') }}</h4>
                <p class="card-category">{{ __('create') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status_success'))
                <div class="row">
                  <div class="col-sm-12">
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="blood-icons">close</i>
                      </button>
                      <span>{{ session('status_success') }}</span>
                    </div>
                  </div>
                </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="group">{{ __(' Group') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('group') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('group') ? ' is-invalid' : '' }}" group="text" name="group" id="group" placeholder="{{ __('Title') }}" value="{{old('group', $blood->group)}}" required />
                      @if ($errors->has('group'))
                      <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('group') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
  
                

              </div>

            </div>


            <div class="card-footer ml-auto mr-auto ">
              <div class="row">
                <div class="col-4">
                  <a href="{{route('blood.index')}}" class="btn btn-primary">{{ __('Cancel')}}</a>
                </div>
                <div class="col-4 text-center">
                </div>
                <div class="col-4  text-right">
                  <button type="submit" class="btn btn-primary">{{ ($blood->id)? __('Update'): __('Create') }}</button>
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
<script>
  var rangeSlider = function() {
    var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');

    slider.each(function() {

      value.each(function() {
        var value = $(this).prev().attr('value');
        $(this).html(value);
      });
      range.on('input', function() {
        $(this).next(value).html(this.value);
      });
    });
  };

  $(window).on("load", function() {
    rangeSlider();
    // $('.max-width').on('change', function() {
    //   $(".min-width").prop('max', this.value);
    //   $(".min-width").next('.range-slider__value').html(this.value);
    // })
    // $('.min-width').on('change', function() {
    //   $(".max-width").prop('min', this.value);
    //   $(".max-width").next('.range-slider__value').html(this.value);
    // })

  });
</script>

@endpush