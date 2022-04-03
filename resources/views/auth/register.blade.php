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
                                    <option value="Ata">Abbottabad</option>
                                    <option value="AMD">Ahmedpur</option>
                                    <option value="AHS">Ahsan Pur</option>
                                    <option value="Ab">Aliabad</option>
                                    <option value="Ap">Alpurai</option>
                                    <option value="AFW">Arifwala</option>
                                    <option value="Aq">Athmuqam</option>
                                    <option value="At">Attock</option>
                                    <option value="Ar">Awaran</option>
                                    <option value="Badin">Badin</option>
                                    <option value="Bagh">Bagh</option>
                                    <option value="Bwn">Bahawalnagar</option>
                                    <option value="63100">Bahawalpur</option>
                                    <option value="Bannu">Bannu</option>
                                    <option value="Bd">Bardar</option>
                                    <option value="Bk">Barkhan</option>
                                    <option value="Bg">Batgram</option>
                                    <option value="Bhakka">Bhakkar</option>
                                    <option value="BUR">Burewala</option>
                                    <option value="Cw">Chakwal</option>
                                    <option value="Cm">Chaman</option>
                                    <option value="Cs">Charsadda</option>
                                    <option value="CHICWT">Chichawatni</option>
                                    <option value="Chilas">Chilas</option>
                                    <option value="Chn">Chiniot</option>
                                    <option value="Ct">Chitral</option>
                                    <option value="5">Chunian</option>
                                    <option value="Dadu">Dadu</option>
                                    <option value="Dg">Daggar</option>
                                    <option value="Dbd">Dalbandin</option>
                                    <option value="Dasu">Dasu</option>
                                    <option value="Day">Dera Allahyar</option>
                                    <option value="Db">Dera Bugti</option>
                                    <option value="10">Dera Ghazi Khan</option>
                                    <option value="Dik">Dera Ismail Khan</option>
                                    <option value="Dmj">Dera Murad Jamali</option>
                                    <option value="DP">Duniapur</option>
                                    <option value="Eg">Eidgah</option>
                                    <option value="9241">Faisalabad</option>
                                    <option value="39500">Farooqabad</option>
                                    <option value="Gk">Gakuch</option>
                                    <option value="Ga">Gandava</option>
                                    <option value="Gt">Ghotki</option>
                                    <option value="Glg">Gilgit</option>
                                    <option value="9155">Gujranwala</option>
                                    <option value="9153">Gujrat</option>
                                    <option value="Gd">Gwadar</option>
                                    <option value="hzb">Hafizabad</option>
                                    <option value="Hangu">Hangu</option>
                                    <option value="Hp">Haripur</option>
                                    <option value="Ha">Hyderabad</option>
                                    <option value="Isb">Islamabad</option>
                                    <option value="Ja">Jacobabad</option>
                                    <option value="JLP">Jalal pur</option>
                                    <option value="Js">Jamshoro</option>
                                    <option value="jc">Jhang City</option>
                                    <option value="Jsd">Jhang Sadr</option>
                                    <option value="Jl">Jhelum</option>
                                    <option value="KBW">Kabirwala</option>
                                    <option value="KP">Kahror Pakka</option>
                                    <option value="Kalat">Kalat</option>
                                    <option value="8">Kamoki</option>
                                    <option value="43570">kamra cantt</option>
                                    <option value="Kk">Kandhkot</option>
                                    <option value="9221">Karachi</option>
                                    <option value="Karak">Karak</option>
                                    <option value="Kas">Kasur</option>
                                    <option value="Khairp">Khairpur</option>
                                    <option value="Kw">Khanewal</option>
                                    <option value="KNP">Khanpur</option>
                                    <option value="Kharan">Kharan</option>
                                    <option value="Ks">Khushab</option>
                                    <option value="Kz">Khuzdar</option>
                                    <option value="Kot">Kohat</option>
                                    <option value="Kh">Kohlu</option>
                                    <option value="KTS">Kot Sultan</option>
                                    <option value="Kotli">Kotli</option>
                                    <option value="Kd">Kundian</option>
                                    <option value="9242">Lahore</option>
                                    <option value="Lm">Lakki Marwat</option>
                                    <option value="51">Landi Kotal</option>
                                    <option value="Lk">Larkana</option>
                                    <option value="LY">Layah</option>
                                    <option value="LDH">Lodhran</option>
                                    <option value="Lorala">Loralai</option>
                                    <option value="Mk">Malakand</option>
                                    <option value="ML">Malsi</option>
                                    <option value="17">Manawala</option>
                                    <option value="MBD">MANDI BAHAUDIN</option>
                                    <option value="45">Manga Mandi</option>
                                    <option value="Ms">Mansehra</option>
                                    <option value="Md">Mardan</option>
                                    <option value="Mw">Masiwala</option>
                                    <option value="Mastun">Mastung</option>
                                    <option value="Mt">Matiari</option>
                                    <option value="Mehra">Mehra</option>
                                    <option value="43">Mian Chanu</option>
                                    <option value="Mianwa">Mianwali</option>
                                    <option value="Mpkas">Mirpur Khas</option>
                                    <option value="9261">Multan</option>
                                    <option value="30">Muridkay</option>
                                    <option value="MkB">Musa Khel Bazar</option>
                                    <option value="MZG">Muzaffargarh</option>
                                    <option value="MZFR">Muzaffrabad</option>
                                    <option value="332303">Nabipura</option>
                                    <option value="NKS">Nankana Sahib</option>
                                    <option value="Nw">Narowal</option>
                                    <option value="Nf">Naushahro Firoz</option>
                                    <option value="Nas">Nawabshah</option>
                                    <option value="Ns">Nowshera</option>
                                    <option value="Ok">Okara</option>
                                    <option value="ppt">Pakpattan</option>
                                    <option value="Pg">Panjgur</option>
                                    <option value="Pc">Parachinar</option>
                                    <option value="12">Patoki</option>
                                    <option value="PSH">Peshawar</option>
                                    <option value="PIRM">PIRMEHAL</option>
                                    <option value="Pishin">Pishin</option>
                                    <option value="Qad">Qila Abdullah</option>
                                    <option value="Qsu">Qila Saifullah</option>
                                    <option value="Quet">Quetta</option>
                                    <option value="RYK">Rahim Yar Khan</option>
                                    <option value="Rp">Rajanpur</option>
                                    <option value="Rwk">Rawala Kot</option>
                                    <option value="Rwp">Rawalpindi</option>
                                    <option value="Sda">Sadiqabad</option>
                                    <option value="39540">safdarabad</option>
                                    <option value="SWL">Sahiwal</option>
                                    <option value="SaSh">Saidu Sharif</option>
                                    <option value="SHK">Saikhupora</option>
                                    <option value="SKH">Sakhar</option>
                                    <option value="SS">Sama Satta</option>
                                    <option value="9">Sangala Hil</option>
                                    <option value="sg">Sanghar</option>
                                    <option value="Sgha">Sargodha</option>
                                    <option value="Seri">Serai</option>
                                    <option value="Sk">Shahdad Kot</option>
                                    <option value="20">ShahKot</option>
                                    <option value="39350">Sheikhupura</option>
                                    <option value="Skp">Shikarpur</option>
                                    <option value="SJB">Shujabad</option>
                                    <option value="19">Sialkot</option>
                                    <option value="Sibi">Sibi</option>
                                    <option value="Sukur">Sukkur</option>
                                    <option value="Swabi">Swabi</option>
                                    <option value="Tay">Tando Allahyar</option>
                                    <option value="Tmk">Tando Muhammad Khan</option>
                                    <option value="Tank">Tank</option>
                                    <option value="Tt">Thatta</option>
                                    <option value="Tg">Timargara</option>
                                    <option value="Tts">Toba Tek Singh</option>
                                    <option value="Tb">Turbat</option>
                                    <option value="Uk">Umarkot</option>
                                    <option value="Ud">Upper Dir</option>
                                    <option value="Uthal">Uthal</option>
                                    <option value="VHR">Vehari</option>
                                    <option value="Zhob">Zhob</option>
                                    <option value="Zr">Ziarat</option>
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
