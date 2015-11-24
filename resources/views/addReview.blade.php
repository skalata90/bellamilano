@extends('template')


@section('content')
            <section class="contbook">
                  <h1 id="maintext">Tell us what our service is</h1>
            </section>

            <div id="addReview">
                <h1>Write your review<img src="{{asset('img/span.fw.png')}}" class="graf"></h1>
                    <h2>Please write your review</h2>
                        <div class="addForm">
                            {!! Form::open(array('url' => 'reviews','class'=>'pure-form')) !!}
                                <fieldset class="pure-group">

                                    {!! Form::textarea('content','', array('placeholder' => 'Your Review')) !!}
                                    {!! $errors->first('content','<p class="error">:message</p>') !!}
                                    {!! Form::hidden("user_id",\Auth::user()->id)!!}

                                </fieldset>
                                <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Add review</button>
                            {!! Form::close() !!}
                        </div>
                
            </div>

@stop