@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('Admin Dashboard')])

@section('content')
    <div class="container" style="height: auto;">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="card card-login card-hidden mb-3">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title"><strong>{{ __('Register') }}</strong></h4>

                        </div>
                        <div class="card-body ">

                            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">face</i>
                                        </span>
                                    </div>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
                                </div>
                                @if ($errors->has('name'))
                                    <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">email</i>
                                        </span>
                                    </div>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="{{ __('Email...') }}" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <div id="email-error" class="error text-danger pl-3" for="email"
                                        style="display: block;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">person_add</i>
                                    </span>
                                </div>
                                <select name="city" id="city_for_search" class="form-control" required="">
                                    <option value="" data-select2-id="2"> -- Select Your City -- </option>
                                    <option value="Abbottabad">Abbottabad</option>
                                    <option value="Ahmedpur">Ahmedpur</option>
                                    <option value="Ahsan Pur">Ahsan Pur</option>
                                    <option value="Aliabad">Aliabad</option>
                                    <option value="Alpurai">Alpurai</option>
                                    <option value="Arifwala">Arifwala</option>
                                    <option value="Athmuqam">Athmuqam</option>
                                    <option value="Attock">Attock</option>
                                    <option value="Awaran">Awaran</option>
                                    <option value="Badin">Badin</option>
                                    <option value="Bagh">Bagh</option>
                                    <option value="Bahawalnagar">Bahawalnagar</option>
                                    <option value="Bahawalpur">Bahawalpur</option>
                                    <option value="Bannu">Bannu</option>
                                    <option value="Bardar">Bardar</option>
                                    <option value="Barkhan">Barkhan</option>
                                    <option value="Batgram">Batgram</option>
                                    <option value="Bhakka">Bhakkar</option>
                                    <option value="Burewala">Burewala</option>
                                    <option value="Chakwal">Chakwal</option>
                                    <option value="Chaman">Chaman</option>
                                    <option value="Charsadda">Charsadda</option>
                                    <option value="Chichawatni">Chichawatni</option>
                                    <option value="Chilas">Chilas</option>
                                    <option value="Chiniot">Chiniot</option>
                                    <option value="Chitral">Chitral</option>
                                    <option value="Chunian">Chunian</option>
                                    <option value="Dadu">Dadu</option>
                                    <option value="Daggar">Daggar</option>
                                    <option value="Dalbandin">Dalbandin</option>
                                    <option value="Dasu">Dasu</option>
                                    <option value="Dera Allahyar">Dera Allahyar</option>
                                    <option value="Dera Bugt">Dera Bugti</option>
                                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                    <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                    <option value="Dera Murad Jamali">Dera Murad Jamali</option>
                                    <option value="Duniapur">Duniapur</option>
                                    <option value="Eidgah">Eidgah</option>
                                    <option value="Faisalabad">Faisalabad</option>
                                    <option value="Farooqabad">Farooqabad</option>
                                    <option value="Gakuch">Gakuch</option>
                                    <option value="Gandava">Gandava</option>
                                    <option value="Ghotki">Ghotki</option>
                                    <option value="Gilgit">Gilgit</option>
                                    <option value="Gujranwala">Gujranwala</option>
                                    <option value="Gujrat">Gujrat</option>
                                    <option value="Gwadar">Gwadar</option>
                                    <option value="Hafizabad">Hafizabad</option>
                                    <option value="Hangu">Hangu</option>
                                    <option value="Haripur">Haripur</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Islamabad">Islamabad</option>
                                    <option value="Jacobabad">Jacobabad</option>
                                    <option value="Jalal pur">Jalal pur</option>
                                    <option value="Jamshoro">Jamshoro</option>
                                    <option value="Jhang City">Jhang City</option>
                                    <option value="Jhang Sadr">Jhang Sadr</option>
                                    <option value="Jhelum">Jhelum</option>
                                    <option value="Kabirwala">Kabirwala</option>
                                    <option value="Kahror Pakka">Kahror Pakka</option>
                                    <option value="Kalat">Kalat</option>
                                    <option value="Kamoki">Kamoki</option>
                                    <option value="kamra cantt">kamra cantt</option>
                                    <option value="Kandhkot">Kandhkot</option>
                                    <option value="Karachi">Karachi</option>
                                    <option value="Karak">Karak</option>
                                    <option value="Kasur">Kasur</option>
                                    <option value="Khairpur">Khairpur</option>
                                    <option value="Khanewal">Khanewal</option>
                                    <option value="Khanpur">Khanpur</option>
                                    <option value="Kharan">Kharan</option>
                                    <option value="Khushab">Khushab</option>
                                    <option value="Khuzdar">Khuzdar</option>
                                    <option value="Kohat">Kohat</option>
                                    <option value="Kohlu">Kohlu</option>
                                    <option value="Kot Sultan">Kot Sultan</option>
                                    <option value="Kotli">Kotli</option>
                                    <option value="Kundian">Kundian</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Lakki Marwat">Lakki Marwat</option>
                                    <option value="Landi Kotal">Landi Kotal</option>
                                    <option value="Larkana">Larkana</option>
                                    <option value="Layah">Layah</option>
                                    <option value="Lodhran">Lodhran</option>
                                    <option value="Loralai">Loralai</option>
                                    <option value="Malakand">Malakand</option>
                                    <option value="Malsi">Malsi</option>
                                    <option value="Manawala">Manawala</option>
                                    <option value="MANDI BAHAUDIN">MANDI BAHAUDIN</option>
                                    <option value="Manga Mandi">Manga Mandi</option>
                                    <option value="Mansehra">Mansehra</option>
                                    <option value="Mardan">Mardan</option>
                                    <option value="Masiwala">Masiwala</option>
                                    <option value="Mastung">Mastung</option>
                                    <option value="Matiari">Matiari</option>
                                    <option value="Mehra">Mehra</option>
                                    <option value="Mian Chanu">Mian Chanu</option>
                                    <option value="Mianwali">Mianwali</option>
                                    <option value="Mirpur Khas">Mirpur Khas</option>
                                    <option value="Multan">Multan</option>
                                    <option value="Muridkay">Muridkay</option>
                                    <option value="Musa Khel Bazar">Musa Khel Bazar</option>
                                    <option value="Muzaffargarh">Muzaffargarh</option>
                                    <option value="Muzaffrabad">Muzaffrabad</option>
                                    <option value="Nabipura">Nabipura</option>
                                    <option value="Nankana Sahib">Nankana Sahib</option>
                                    <option value="Narowal">Narowal</option>
                                    <option value="Naushahro Firoz">Naushahro Firoz</option>
                                    <option value="Nawabshah">Nawabshah</option>
                                    <option value="Nowshera">Nowshera</option>
                                    <option value="Okara">Okara</option>
                                    <option value="Pakpattan">Pakpattan</option>
                                    <option value="Panjgur">Panjgur</option>
                                    <option value="Parachinar">Parachinar</option>
                                    <option value="Patoki">Patoki</option>
                                    <option value="Peshawar">Peshawar</option>
                                    <option value="PIRMEHAL">PIRMEHAL</option>
                                    <option value="Pishin">Pishin</option>
                                    <option value="Qila Abdullah">Qila Abdullah</option>
                                    <option value="Qila Saifullah">Qila Saifullah</option>
                                    <option value="Quetta">Quetta</option>
                                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                    <option value="Rajanpur">Rajanpur</option>
                                    <option value="Rawala Kot">Rawala Kot</option>
                                    <option value="Rawalpindi">Rawalpindi</option>
                                    <option value="Sadiqabad">Sadiqabad</option>
                                    <option value="Safdarabad">Safdarabad</option>
                                    <option value="Sahiwal">Sahiwal</option>
                                    <option value="Saidu Sharif">Saidu Sharif</option>
                                    <option value="Saikhupora">Saikhupora</option>
                                    <option value="Sakhar">Sakhar</option>
                                    <option value="Sama Satta">Sama Satta</option>
                                    <option value="Sangala Hil">Sangala Hil</option>
                                    <option value="Sanghar">Sanghar</option>
                                    <option value="Sargodha">Sargodha</option>
                                    <option value="Serai">Serai</option>
                                    <option value="Shahdad Kot">Shahdad Kot</option>
                                    <option value="ShahKot">ShahKot</option>
                                    <option value="Sheikhupura">Sheikhupura</option>
                                    <option value="Shikarpur">Shikarpur</option>
                                    <option value="Shujabad">Shujabad</option>
                                    <option value="Sialkot">Sialkot</option>
                                    <option value="Sibi">Sibi</option>
                                    <option value="Sukur">Sukkur</option>
                                    <option value="Swabi">Swabi</option>
                                    <option value="Tando Allahyar">Tando Allahyar</option>
                                    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                    <option value="Tank">Tank</option>
                                    <option value="Thatta">Thatta</option>
                                    <option value="Timargara">Timargara</option>
                                    <option value="Toba Tek Singh">Toba Tek Singh</option>
                                    <option value="Turbat">Turbat</option>
                                    <option value="Umarkot">Umarkot</option>
                                    <option value="Upper Dir">Upper Dir</option>
                                    <option value="Uthal">Uthal</option>
                                    <option value="Vehari">Vehari</option>
                                    <option value="Zhob">Zhob</option>
                                    <option value="Ziarat">Ziarat</option>
                                </select>
                            </div>
                            </div>
                            <div class="bmd-form-group{{ $errors->has('latitude') ? ' has-danger' : '' }} mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">person_add</i>
                                        </span>
                                    </div>
                                    <input type="text" name="latitude" class="form-control"
                                        placeholder="{{ __('Latitude...') }}" value="{{ old('latitude') }}" required>
                                </div>
                                @if ($errors->has('latitude'))
                                    <div id="email-error" class="error text-danger pl-3" for="latitude"
                                        style="display: block;">
                                        <strong>{{ $errors->first('latitude') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="bmd-form-group{{ $errors->has('longitude') ? ' has-danger' : '' }} mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">person_add</i>
                                        </span>
                                    </div>
                                    <input type="text" name="longitude" class="form-control"
                                        placeholder="{{ __('Longitude...') }}" value="{{ old('longitude') }}" required>
                                </div>
                                @if ($errors->has('longitude'))
                                    <div id="email-error" class="error text-danger pl-3" for="longitude"
                                        style="display: block;">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="bmd-form-group{{ $errors->has('mobile') ? ' has-danger' : '' }} mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">person_add</i>
                                        </span>
                                    </div>
                                    <input type="text" name="mobile" class="form-control"
                                        placeholder="{{ __('Mobile...') }}" value="{{ old('mobile') }}" required>
                                </div>
                                @if ($errors->has('mobile'))
                                    <div id="email-error" class="error text-danger pl-3" for="mobile"
                                        style="display: block;">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">person_add</i>
                                    </span>
                                </div>
                                <select id="inputGroup" class="form-control" name="blood_id" required>
                                    @foreach ($blood_types as $single)
                                        <option value="{{$single->id}}">{{$single->group}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="{{ __('Password...') }}" required>
                                </div>
                                @if ($errors->has('password'))
                                    <div id="password-error" class="error text-danger pl-3" for="password"
                                        style="display: block;">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div
                                class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control" placeholder="{{ __('Confirm Password...') }}" required>
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <div id="password_confirmation-error" class="error text-danger pl-3"
                                        for="password_confirmation" style="display: block;">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">person_add</i>
                                    </span>
                                </div>
                                <select id="inputGroup" class="form-control" name="role" required>
                                    <option value="donor">Donor</option>
                                    <option value="receptor">Receptor</option>
                                </select>
                            </div>
                            <div class="form-check mr-auto ml-3 mt-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="policy" name="policy"
                                        {{ old('policy', 1) ? 'checked' : '' }}>
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                    {{ __('I agree with the ') }} <a href="#">{{ __('Privacy Policy') }}</a>
                                </label>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <button type="submit"
                                class="btn btn-primary btn-link btn-lg">{{ __('Create account') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
