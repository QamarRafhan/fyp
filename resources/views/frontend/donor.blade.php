@extends('home.index')

@section('content')
<section style="background: url(images/ward.jpg) no-repeat center ; background-size: cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center" style="color: white;padding-top: 40px">Find Donors Near You !</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="padding: 40px 50px 30px 50px">
                <form action="{{ route('donors') }}" method="get" novalidate="" class="i-amphtml-form amp-form-dirty">
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="city_for_search" class="lable-white">Select City</label>
                            <select name="city" id="city_for_search" class="form-control f16 js-example-basic-single select2-hidden-accessible" required="" data-select2-id="city_for_search" tabindex="-1" aria-hidden="true">
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
                        <div class="col-md-4">
                            <label for="group_for_search" class="lable-white">Select Group</label>
                            <select name="group" id="group_for_search" class="form-control f16 js-example-basic-single select2-hidden-accessible" data-select2-id="group_for_search" tabindex="-1" aria-hidden="true">
                                <option value="" data-select2-id="4"> -- Select Your Group -- </option>
                                <option value="A+"> A+</option>
                                <option value="A-"> A-</option>
                                <option value="B+"> B+</option>
                                <option value="B-"> B-</option>
                                <option value="O+"> O+</option>
                                <option value="O-"> O-</option>
                                <option value="AB+"> AB+</option>
                                <option value="AB-"> AB-</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-23 f16" style=" margin-top: 35px;">Search <i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<div class="row" style="margin: 30px 0;">
    <div class="col-md-12 ">
        <table id="" class="table table-striped table-bordered">
            <thead style="background-color: #ef3d32;color: white;">
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Blood Group
                    </th>

                    <th>
                        Email
                    </th>
                    <th>
                        Address
                    </th>
                    <th>
                        Mobile
                    </th>
                    <th>
                        Blood Request
                    </th>
                </tr>
            </thead>
            <tbody style="color: black">
                @foreach ($donor as $single)
                <tr>
                    <td>
                        {{ ucfirst($single->name) }}
                    </td>
                    <td>
                        {{ ucfirst($single->blood ? $single->blood->group : '') }}
                    </td>
                    <td>
                        {{ ucfirst($single->email) }}
                    </td>
                    <td>
                        {{ ucfirst($single->address) }}
                    </td>
                    <td>
                        <a href="tel: {{ ucfirst($single->mobile) }}">
                            {{ ucfirst($single->mobile) }} </a>
                    </td>
                    <td>
                        @guest
                        <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('login', ['redirect' => '/donors']) }}" data-original-title="" title="">
                            <button class="btn btn-danger">Login to Request</button>
                            <div class="ripple-container"></div>
                        </a>
                        @endguest
                        @auth
                        <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('bloodrequest', ['donor' => $single->id]) }}" data-original-title="" title="">
                            <button class="btn btn-danger">Request</button>
                            <div class="ripple-container"></div>
                        </a>
                        @endauth
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>

    </div>

</div>
@endsection
@push('js')
<script>
    $(document).ready(function() {

        $('#city_for_search').select2();
        $('#group_for_search').select2();
    });
</script>
@endpush