@extends('template')


@section('content')
            <section class="contbook">
                  <h1 id="maintext">Joint us, become a member</h1>
            </section>

            <div id="logReg">
                <h1>Register or Login<img src="{{asset('img/span.fw.png')}}" class="graf"></h1>
                    <div id="regoForm">
                        {!! Form::open(array('url' => 'users','class'=>'pure-form pure-form-stacked')) !!}
                            <fieldset>
                                <legend>Fill up the form to register</legend>

                                {!! Form::text('username','', array('placeholder' => 'User Name')) !!}
                                {!! $errors->first('username','<p class="error">:message</p>') !!}

                                {!! Form::text('firstname','', array('placeholder' => 'First Name')) !!}
                                {!! $errors->first('firstname','<p class="error">:message</p>') !!}

                                {!! Form::text('lastname','', array('placeholder' => 'Last Name')) !!}
                                {!! $errors->first('lastname','<p class="error">:message</p>') !!}

                                {!! Form::text('email','', array('placeholder' => 'Email')) !!}
                                {!! $errors->first('email','<p class="error">:message</p>') !!}

                                {!! Form::password('password', array('placeholder' => 'Password')) !!}

                                {!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password')) !!}

                            </fieldset>
                            <button type="submit" class="pure-button pure-button-primary">Register</button>
                        {!! Form::close() !!}

                    </div>
                        <div id="loginForm">

                            {!! Form::open(array('url' => 'login','class'=>'pure-form pure-form-stacked login')) !!}
                                <fieldset>
                                    <legend>Please login</legend>

                                    {!! Form::text('login_username','', array('placeholder' => 'User Name')) !!}
                                    {!! $errors->first('login_username','<p class="error">:message</p>') !!}

                                    {!! Form::password('login_password', array('placeholder' => 'Password')) !!}
                                </fieldset>
                                <button type="submit"  class="pure-button pure-button-primary">
                                Login</button>
                            {!! Form::close() !!}

                        {{Session::get("message")}}

                    </div>
                
            </div>

@stop