<h2>{{$category->name}}</h2>
@foreach($category->menus as $menu)
    <div class="menuitem">
        <h3 data-field="name" data-menuid="{{$menu->id}}">{{$menu->name}}</h3>
            <span data-field="price" data-menuid="{{$menu->id}}">{{$menu->price}}</span>
            
            @if(Auth::check())
            	@if(Auth::user()->admin == 1)
	               <span><i class="fa fa-pencil-square"></i></span>
	            @endif
	        @endif
     
                <p data-field="content" data-menuid="{{$menu->id}}">{{$menu->content}}</p>

                @if(Auth::check())
                	@if(Auth::user()->admin == 1)
		                {!! Form::open(["url"=>"menus/".$menu->id, "method"=>"delete"]) !!} 
		                {!! Form::submit("Delete", array('class'=>'pure-button pure-button-primary')) !!}
		                {!! Form::close() !!}
		            @endif
		        @endif
    </div>
@endforeach