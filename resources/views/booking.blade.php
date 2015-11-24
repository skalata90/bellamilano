@extends('template')


@section('content')
            <section class="contbook">
                  <h1 id="maintext">Make online reservation<br>
                    <span>Take you couple of minutes</span></h1>
            </section>

            <div id="booking">
                <h1>Make a booking<img src="{{asset('img/span.fw.png')}}" class="graf"></h1>
                    <p>We take reservations for lunch and dinner. To make a reservation, please call us at 09 633 4573 between 12am-6pm, Monday to Sunday.</p>

                        {!! Form::open(array('url' => 'booking','class'=>'pure-form')) !!}
                            <fieldset class="pure-group">

                                {!! Form::text('name','', array('placeholder' => 'Name', 'class'=>'pure-input-1-2')) !!}
                                {!! $errors->first('name','<p class="error">:message</p>') !!}

                                {!! Form::text('phone','', array('placeholder' => 'Phone', 'class'=>'pure-input-1-2')) !!}
                                {!! $errors->first('phone','<p class="error">:message</p>') !!}

                                {!! Form::text('email','', array('placeholder' => 'Email', 'class'=>'pure-input-1-2')) !!}
                                {!! $errors->first('email','<p class="error">:message</p>') !!}

                                {!! Form::text('date_book','', array('placeholder' => 'Date', 'class'=>'pure-input-1-2')) !!}
                                {!! $errors->first('date_book','<p class="error">:message</p>') !!}

                                {!! Form::text('time_book','', array('placeholder' => 'Time', 'class'=>'pure-input-1-2')) !!}
                                {!! $errors->first('time_book','<p class="error">:message</p>') !!}

                            </fieldset>
                            <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Send</button>
                            {{Session::get("message_success")}}
                        {!! Form::close() !!}

                            <div id="gallery">
                                <div class="carousel">
                                  <ul>
                                    <li> <img src="{{asset('img/gal1.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal2.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal3.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal4.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal5.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal6.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal7.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal8.1.jpg')}}" alt=""> </li>
                                  </ul>
                                  <div class="controls">
                                    <div class="prev"></div>
                                    <div class="next"></div>
                                  </div>
                                </div>

                                <div class="thumbnails">
                                  <ul>
                                    <li> <img src="{{asset('img/gal1.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal2.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal3.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal4.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal5.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal6.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal7.1.jpg')}}" alt=""> </li>
                                    <li> <img src="{{asset('img/gal8.1.jpg')}}" alt=""> </li>
                                  </ul>
                                </div>
                            </div>
            </div>

            <div id="midelepic">
                <div class="midletext">
                    <h1>BYO week days</h1>
                        <h2>Every Weekend, we’re offering groups of 6 or more that book an area in our bar a complimentary bottle of Wine.</h2>
                </div>
            </div>

            <div id="events">
                <div id="private">
                    <div class="textprivate">
                        <h2>Private Dining & Events</h2>
                        <p>Whatever your event or celebration, we are here to make your special day a truly memorable one. Bella Milano private dining experts are more than happy to create custom floral arrangements and arrange for guests to meet our chef during the course of their meal.</p>
                            <div class="evenpic"><img src="{{asset('img/private1.jpg')}}" alt=""></div>
                    </div>
                </div>
                    <div id="wedding">
                        <div class="textprivate">
                            <h2>Wedding & Birthdays</h2>
                                <div class="evenpic"><img src="{{asset('img/party.jpg')}}" alt=""></div>
                                <p>We can offer you exclusive use of our prviate garden area for both your wedding ceremony, casual drinks and formal or casual reception.Various marguee options are avaiable and we have chairs and tables that can be set-up to suit your needs.
                                We can help make your wedding day special.</p>
                        </div>
                    </div>
            </div>       

@stop