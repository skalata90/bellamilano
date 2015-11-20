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

            <div id="menu">
                <h1>Check our menu <br> <img src="img/span.fw.png" class="graf"></h1>
                @if(Auth::check())    
                    @if(Auth::user()->admin == 1)
                        <a href="{{url('admin')}}">Click here to add new item to the menu</a> 
                    @endif
                @endif
                
                    <div id="starter" class="resfood">
                        @if(Auth::check()) 
                            @if(Auth::user()->admin == 1)              
                                @include("adminMenuItem",["category"=>\App\Models\Category::find(1)]);
                            @else  
                            @include("menuItem",["category"=>\App\Models\Category::find(1)]);
                            @endif
                        @else          
                            @include("menuItem",["category"=>\App\Models\Category::find(1)]);
                        @endif                                             
                    </div>

                    <div id="salad" class="resfood">
                        @if(Auth::check()) 
                            @if(Auth::user()->admin == 1)              
                                @include("adminMenuItem",["category"=>\App\Models\Category::find(2)]);
                            @else 
                            @include("menuItem",["category"=>\App\Models\Category::find(2)]); 
                            @endif
                        @else          
                            @include("menuItem",["category"=>\App\Models\Category::find(2)]);
                        @endif  
                    </div>
            </div>

            <div id="menu_pic"><h1>- The best food around Auckland -</h1></div>
                
                <div id="menu">
                    <div id="main" class="resfood">
                        @if(Auth::check()) 
                            @if(Auth::user()->admin == 1)              
                                @include("adminMenuItem",["category"=>\App\Models\Category::find(3)]);
                            @else
                            @include("menuItem",["category"=>\App\Models\Category::find(3)]);  
                            @endif
                        @else          
                            @include("menuItem",["category"=>\App\Models\Category::find(3)]);
                        @endif  
                    </div>

                    <div id="dessert" class="resfood">
                        @if(Auth::check()) 
                            @if(Auth::user()->admin == 1)              
                                @include("adminMenuItem",["category"=>\App\Models\Category::find(4)]);
                            @else
                            @include("menuItem",["category"=>\App\Models\Category::find(4)]);  
                            @endif
                        @else          
                            @include("menuItem",["category"=>\App\Models\Category::find(4)]);
                        @endif  
                    </div>

                </div>

@stop