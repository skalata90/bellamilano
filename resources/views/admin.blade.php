@extends('template')


@section('content')
            <section class="contbook">
                  <h1 id="maintext">Administrator page</h1>
            </section>

            <div id="adminPage">
                <h1>Admin page<img src="{{asset('img/span.fw.png')}}" class="graf"></h1>
                    <h2>Add new item to the menu</h2>
                        <div class="addItem">
                            {!! Form::open(array('url' => 'menus','class'=>'pure-form pure-form-stacked')) !!}
                                <fieldset>

                                    {!! Form::text('name','', array('placeholder' => 'Meal Name')) !!}
                                    {!! $errors->first('name','<p class="error">:message</p>') !!}

                                    {!! Form::text('content','', array('placeholder' => 'Content')) !!}
                                    {!! $errors->first('content','<p class="error">:message</p>') !!}

                                    {!! Form::text('price','', array('placeholder' => 'Price')) !!}
                                    {!! $errors->first('price','<p class="error">:message</p>') !!}

                                    {!! Form::select('category_id', array(1 =>'Starter',2 =>'Salad',3 =>'Main',4 =>'Dessert'),null,['placeholder' => 'Select a category']) !!}
                                    {!! $errors->first('category_id','<p class="error">:message</p>') !!}

                                </fieldset>
                                
                                <button type="submit" class="pure-button pure-button-primary">Add item</button>
                            {!! Form::close() !!}                            

                        </div>
                        <h2>Delete members accounts</h2>
                            <div class="removeUser">
                                @foreach($users as $user)
                                    <div class="userInfo">
                                        <h5>User Name</h5>
                                        <h4>{{$user->username}}</h4>

                                        <h5>First Name</h5>
                                        <h4>{{$user->firstname}}</h4>

                                        <h5>Last Name</h5>
                                        <h4>{{$user->lastname}}</h4>

                                        <h5>Email</h5>
                                        <h4>{{$user->email}}</h4>

                                        {!! Form::open(["url"=>"users/".$user->id, "method"=>"delete"]) !!} 
                                        {!! Form::submit("Delete", array('class'=>'pure-button pure-button-primary')) !!}
                                        {!! Form::close() !!}

                                    </div>
                                @endforeach
                            </div>
            </div>

@stop