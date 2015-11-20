@extends('template')


@section('content')
            <section class="contbook">
                  <h1 id="maintext">Member profile page</h1>
            </section>

            <div id="profile">
                <h1>Member profile<img src="{{asset('img/span.fw.png')}}" class="graf"></h1>
                    <h2>Please double click on a content to Edit</h2>
                        <div class="userPro">
                            <h2>My Profile</h2>

                            <h5>User Name</h5>
                            <h4 data-field-user="username">{!!$user->username!!}</h4>

                            <h5>First Name</h5>
                            <h4 data-field-user="firstname">{!!$user->firstname!!}</h4>

                            <h5>Last Name</h5>
                            <h4 data-field-user="lastname">{!!$user->lastname!!}</h4>

                            <h5>Email</h5>
                            <h4 data-field-user="email">{!!$user->email!!}</h4>
                        </div>

                        <div class="wineAd"><img src="{{asset('img/wineAd.png')}}" class="graf"></div>
                
            </div>

@stop