@extends('template')


@section('content')
            <section class="contbook">
                  <h1 id="maintext">Get in touch with us</h1>
            </section>

            <div id="contact">
                <h1>Our location<img src="{{asset('img/span.fw.png')}}" class="graf"></h1>
                    <p>Located in the heart of Auckland, close to many shops. Bella Milano gives you that Italian breeze to fresh you up.<br>If you have questions or comments, please get a hold of us in a way most convenient to you.<br><br><br>Address: 12 Shortland St Auckland<br>Ph: 09 633 4573<br>Opening hours: Mon to Thur 11am-Late <br> Fri to Sun 9am-Late</p>
                        

                        {!! Form::open(array('url' => 'contact','class'=>'pure-form')) !!}
                            <fieldset class="pure-group">

                                {!! Form::text('name','', array('placeholder' => 'Name', 'class'=>'pure-input-1-2')) !!}
                                {!! $errors->first('name','<p class="error">:message</p>') !!}

                                {!! Form::text('phone','', array('placeholder' => 'Phone', 'class'=>'pure-input-1-2')) !!}
                                {!! $errors->first('phone','<p class="error">:message</p>') !!}

                                {!! Form::text('email','', array('placeholder' => 'Email', 'class'=>'pure-input-1-2')) !!}
                                {!! $errors->first('email','<p class="error">:message</p>') !!}

                                {!! Form::textarea('content','', array('placeholder' => 'Message', 'class'=>'pure-input-1-2')) !!}
                                {!! $errors->first('content','<p class="error">:message</p>') !!}

                            </fieldset>
                            <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Send</button>
                            {{Session::get("message_success")}}
                        {!! Form::close() !!}
                       
            </div>

            <div id="map"></div>

@stop