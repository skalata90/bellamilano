@extends('template')


@section('content')
            <section>
                  <h1 id="maintext">“The right ingredients <br>for the right food”<br> <a href="{{url('booking')}}" class="hvr-push">Book a table</a></h1>
                    <div id="JiSlider" class="jislider">
                      <ul>
                        <li id="slide1">
                        </li>
                        <li id="slide2">
                        </li>
                        <li id="slide3">
                        </li>
                        <li id="slide4">
                        </li>
                      </ul>
                    </div>
            </section>

            <section>
                <div id="text">
                    <h1>Just the right food <br> <img src="{{asset('img/span.fw.png')}}" class="graf"></h1>
                        <p>At Bella Milano Restaurant, the key to any good Italian dish is to use only the freshest
                        ingredients and keep it simple,<span class="hideIt"> “all of our dishes are prepared to order with only the
                        highest quality ingredients.” says our head chef.</span></p>
                            <div id="chef" class="hidechef">
                                <img src="{{asset('img/chef.fw.png')}}">
                            </div>
                </div>
                    <div id="plate">
                        <img src="{{asset('img/img8.png')}}">
                    </div>              
            </section>

            <section>
                <h1>Check out our weekly special <br> <img src="{{asset('img/span.fw.png')}}" class="graf"></h1>
                    <div id="weeksp">
                        <img src="{{asset('img/fish.png')}}" class="special">
                            <h2>Fish of the day<br>-Monday-</h2>
                                <p>Pan fried market fish, crispy polenta cake, beetroot salad,caper aioli</p>
                    </div>

                    <div id="weeksp">
                        <img src="{{asset('img/beef1.fw.png')}}" class="special">
                            <h2>Thai beef salad<br>-Wednesday-</h2>
                                <p>Asian greens, sprouts, crispy noodles, lemon dressing</p>
                    </div>

                    <div id="weeksp">
                        <img src="{{asset('img/pasta1.fw.png')}}" class="special">
                            <h2>Pasta of the day<br>-Friday-</h2>
                                <p>Fettuccine with chicken, asparagus, fresh tomatoin pesto cream sauce</p>
                    </div>
            </section>
@stop      