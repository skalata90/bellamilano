@extends('template')


@section('content')
            <section class="contbook">
                  <h1 id="maintext">Tell us what our service is</h1>
            </section>

            <div id="reviews">
                <div class="heading1"><h1>Add your reviews</h1><img src="img/span.fw.png" class="graf">
                    @if(Auth::check())
                    <a href="{{url('reviews/create')}}">Click here to add a review</a></div>
                    @else
                    <a href="{{url('login')}}">Click here to add a review</a></div>
                    @endif
                    <div class="main_review_wrap">
                    
                    <?php $reviews = \App\Models\Review::paginate(3); 

                        $reviews->setPath("");
                    ?>

                        @foreach($reviews as $review)
                                  
                           <div class="review">
                                <h2>{{$review->user->firstname}} {{$review->user->lastname}}<br><span>{{$review->created_at}}</span></h2>
                                    <p>{{$review->content}}</a></p><br>

                                    @if(Auth::check())
                                        @if(Auth::user()->admin == 1)
                                            {!! Form::open(["url"=>"reviews/".$review->id, "method"=>"delete"]) !!} 
                                            {!! Form::submit("Delete", array('class'=>'pure-button pure-button-primary')) !!}
                                            {!! Form::close() !!}
                                        @endif
                                        @if(Auth::user()->id == $review->user->id)
                                            {!! Form::open(["url"=>"reviews/".$review->id, "method"=>"delete"]) !!} 
                                            {!! Form::submit("Delete", array('class'=>'pure-button pure-button-primary')) !!}
                                            {!! Form::close() !!}
                                        @endif
                                    @endif

                            </div>

                        @endforeach

                        {!! $reviews->render();!!}
                        
                    </div>

                    <div class="socialM"></div>
            </div>
@stop