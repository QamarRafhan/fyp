@extends('layouts.app', ['activePage' => 'donation.create', 'titlePage' => __('Create donation')])

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    @if ($donation->id)
                        <form method="post" action="{{ route('donation.update') }}" class="form-horizontal">
                            @method('PUT')
                        @else
                            <form method="post" action="{{ route('donation.store') }}" class="form-horizontal">
                    @endif
                    @csrf
                    <div class="card ">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">{{ __('Donation') }}</h4>
                            <p class="card-category">{{ __('create') }}</p>
                        </div>
                        <div class="card-body ">
                            @if (session('status_success'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status_success') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            {{-- <div class="row">
                                <label class="col-sm-2 col-form-label" for="hospital_id">{{ __('Donation') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group {{ $errors->has('hospital_id') ? ' has-danger' : '' }}">
                                        <select
                                            class="form-control {{ $errors->has('hospital_id') ? ' is-invalid' : '' }}"
                                            type="text" name="hospital_id" id="donation_id" required />
                                        @foreach ($donation as $single)
                                            <option value={{ $single->id }}>
                                                {{ $single->name }}
                                            </option>
                                        @endforeach
                                        </select>
                                        @if ($errors->has('hospital_id'))
                                            <span id="name-error" class="error text-danger"
                                                for="input-name">{{ $errors->first('hospital_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="donor_id">{{ __('Donor') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group {{ $errors->has('donor_id') ? ' has-danger' : '' }}">
                                        <select class="form-control {{ $errors->has('donor_id') ? ' is-invalid' : '' }}"
                                            type="text" name="donor_id" id="donor_id" required />
                                        @foreach ($donors as $single)
                                            <option value={{ $single->id }}>
                                                {{ $single->name }}
                                            </option>
                                        @endforeach
                                        </select>
                                        @if ($errors->has('donor_id'))
                                            <span id="name-error" class="error text-danger"
                                                for="input-name">{{ $errors->first('donor_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="receptor_id">{{ __('Receptor') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group {{ $errors->has('receptor_id') ? ' has-danger' : '' }}">
                                        <select
                                            class="form-control {{ $errors->has('receptor_id') ? ' is-invalid' : '' }}"
                                            type="text" name="receptor_id" id="receptor_id" required />
                                        @foreach ($receptors as $single)
                                            <option value={{ $single->id }}>
                                                {{ $single->name }}
                                            </option>
                                        @endforeach
                                        </select>
                                        @if ($errors->has('receptor_id'))
                                            <span id="name-error" class="error text-danger"
                                                for="input-name">{{ $errors->first('receptor_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label"
                                    for="date">{{ __('Blood Extraction Date') }}</label>
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="col">
                                            <div
                                                class="form-group{{ $errors->has('extraction_date') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control {{ $errors->has('extraction_date') ? ' is-invalid' : '' }}"
                                                    type="date" name="extraction_date" id="extraction_date"
                                                    placeholder="{{ __('Blood Extraction Date') }}"
                                                    value="{{ old('extraction_date', $donation->extraction_date) }}"
                                                    required />
                                                @if ($errors->has('extraction_date'))
                                                    <span id="name-error" class="error text-danger"
                                                        for="input-name">{{ $errors->first('extraction_date') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label"
                                    for="date">{{ __('Blood Transformation Date') }}</label>
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="col">
                                            <div
                                                class="form-group{{ $errors->has('transformation_date') ? ' has-danger' : '' }}">
                                                <input
                                                    class="form-control {{ $errors->has('transformation_date') ? ' is-invalid' : '' }}"
                                                    type="date" name="transformation_date" id="transformation_date"
                                                    placeholder="{{ __('Blood Transformation Date') }}"
                                                    value="{{ old('transformation_date', $donation->transformation_date) }}"
                                                     />
                                                @if ($errors->has('transformation_date'))
                                                    <span id="name-error" class="error text-danger"
                                                        for="input-name">{{ $errors->first('transformation_date') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label"
                                    for="tax_deducted">{{ __('Status') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="status" id="status"
                                                value=0>
                                                Extracted
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="status" id="status"
                                                value=1>
                                            Used
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>


                    <div class="card-footer ml-auto mr-auto ">
                        <div class="row">
                            <div class="col-4">
                                <a href="{{ route('donation.index') }}" class="btn btn-primary">{{ __('Cancel') }}</a>
                            </div>
                            <div class="col-4 text-center">
                            </div>
                            <div class="col-4  text-right">
                                <button type="submit"
                                    class="btn btn-primary">{{ $donation->id ? __('Update') : __('Create') }}</button>
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
        $(window).on("load", function() {
            $('.banks_listing').hide();
            $('#bank_select').on('change', function() {
                if ($(this).find(":selected").val() == 'bank') {

                    $('.banks_listing').slideDown();
                } else {
                    $('.banks_listing').slideUp();
                }
            });
        });
    </script>
@endpush
