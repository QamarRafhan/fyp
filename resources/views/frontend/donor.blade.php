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
                    <form action="{{ route('donors') }}" method="get" novalidate=""
                        class="i-amphtml-form amp-form-dirty">
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="city_for_search" class="lable-white">Select City</label>
                                <select name="city" id="city_for_search"
                                    class="form-control f16 js-example-basic-single select2-hidden-accessible"
                                    required="" data-select2-id="city_for_search" tabindex="-1" aria-hidden="true">
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
                            <div class="col-md-4">
                                <label for="group_for_search" class="lable-white">Select Group</label>
                                <select name="group" id="group_for_search"
                                    class="form-control f16 js-example-basic-single select2-hidden-accessible"
                                    data-select2-id="group_for_search" tabindex="-1" aria-hidden="true">
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
                                <button type="submit" class="btn btn-23 f16" style=" margin-top: 35px;">Search <i
                                        class="fa fa-search"></i></button>
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
                            Mobile
                        </th>
                        <th>
                            City
                        </th>
                        <th>
                            Blood Group
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Distance
                        </th>


                        <th>
                            Blood Request
                        </th>
                    </tr>
                </thead>
                <tbody style="color: black">
                    <?php 
                         $index=0;
                        ?>
                    @auth
              
                <?php

                    if(auth()->user()->latitude && auth()->user()->longitude) {
                        $data[0][]=auth()->user()->name;
                        $data[0][]=auth()->user()->longitude;
                        $data[0][]=auth()->user()->latitude;
                        $data[0][]='http://maps.google.com/mapfiles/ms/icons/green-dot.png';
                        
                
                        $index=1;
                    }

                ?>
            @endauth
                    @foreach ($donor as $key=>$single)
                    <?php 
                    if($single->latitude && $single->longitude) {
                        $data[$key+$index][]=$single->name;
                        $data[$key+$index][]=$single->latitude;
                        $data[$key+$index][]=$single->longitude;
                    }
                    ?>
                  
                        <tr>
                            <td>
                                {{ ucfirst($single->name) }}
                            </td>
                            <td>
                                <a href="tel: {{ ucfirst($single->mobile) }}">
                                    {{ ucfirst($single->mobile) }} </a>
                            </td>
                            <td>
                                {{ ucfirst($single->city) }}
                            </td>
                            <td>
                                {{ ucfirst($single->blood ? $single->blood->group : '') }}
                            </td>
                            <td>
                                {{ ucfirst($single->email) }}
                            </td>


                            <td>
                                {{ $single->distance ? round($single->distance, 2) . ' KM' : '' }}
                            </td>




                            <td>
                                @guest
                                    <a rel="tooltip" class="btn btn-success btn-link"
                                        href="{{ route('login', ['redirect' => '/donors']) }}" data-original-title=""
                                        title="">
                                        <button class="btn btn-danger">Login to Request</button>
                                        <div class="ripple-container"></div>
                                    </a>
                                @endguest
                                @auth
                                    <a rel="tooltip" class="btn btn-success btn-link"
                                        href="{{ route('bloodrequest', ['donor' => $single->id]) }}" data-original-title=""
                                        title="">
                                        <button class="btn btn-danger">Request</button>
                                        <div class="ripple-container"></div>
                                    </a>
                                @endauth
                            </td>

                        </tr>
                    @endforeach

                </tbody>

                <?php
                
               // dd(json_encode($data));
                ?>

            </table>

        </div>
@if(count($data)>0)
        <div id="map" style="width:100%;height:400px;"></div>

        <script>
            function myMap() {
                var locations = JSON.parse('<?php echo JSON_encode($data);?>')
                // var locations = [
                //     ['Bondi Beach', -33.890542, 151.274856, 4],
                //     ['Coogee Beach', -33.923036, 151.259052, 5],
                //     ['Cronulla Beach', -34.028249, 151.157507, 3],
                //     ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
                //     ['Maroubra Beach', -33.950198, 151.259302, 1]
                // ];

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: {{count($data)>1? 10 :15}},
                    center: new google.maps.LatLng({{$data[0][1]}}, {{$data[0][2]}}),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                var infowindow = new google.maps.InfoWindow();

                var marker, i;
                const image =
                    "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map,
                       icon:  (locations[i][3] != "undefined")? locations[i][3] : '',
                        title: locations[i][0],
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infowindow.setContent(locations[i][0]);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }
            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb7MpXPNGT9y6LKzg_bi8R1Q_hwmLKMgk&callback=myMap">
        </script>
@endif
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
