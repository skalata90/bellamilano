$(function(){
// ============ Navigation ========================

var bars = document.querySelector(".bars");
	var nav = document.querySelector("#nav");

	bars.onclick = function(){
		if(nav.className == ""){
			nav.className = "show";
		}else{
			nav.className = "";
		}
	}

//============= Slider ===================

$(window).load(function () {
    $('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: false}).addClass('ff')
})

$('#gallery').lightCarousel();
        $('#gallery').lightCarousel({
 
        // Interval between transitions
        interval: 2000,
         
        // If set to false, it retains the height of first slide
        changeHeight: false,
         
        // Auto transitons
        slideshow: true
         
        });

//================= Editable ==============================


	
	$("[data-field]").each(function(i,el){

		var url = window.location.href +"/"+ $(el).attr("data-menuid");
		var options = {
			type: "textarea",
			cssclass: "editable",
			submitdata: {
				_method:"PUT",
				_token:$('#token').text(),
				field: $(el).attr("data-field")
			},
			submit: "Edit"
		};

		//console.log(options);
		$(el).editable(url,options);

		//console.log(el);

	});

	$("[data-field-user]").each(function(i,el){

		var url = window.location.href;
		var options = {
			type: "textarea",
			cssclass: "editable",
			submitdata: {
				_method:"PUT",
				_token:$('#token').text(),
				field: $(el).attr("data-field-user")
			},
			submit: "Edit"
		};

		//console.log(options);
		$(el).editable(url,options);

		//console.log(el);

	});

	//wysiwyg-----------------------------------
	
	// $(document).on("DOMNodeInserted",function(e){

	// 	if($(e.target).hasClass("editable")){

	// 		tinymce.editors = [];

	// 		tinymce.init({selector:'.editable textarea'});

	// 	}

	// });

        

//========================== MAPS =============================

function initMap() {

	
	var style = 
					[
					    {
					        "featureType": "administrative",
					        "elementType": "all",
					        "stylers": [
					            {
					                "visibility": "on"
					            },
					            {
					                "lightness": 33
					            }
					        ]
					    },
					    {
					        "featureType": "landscape",
					        "elementType": "all",
					        "stylers": [
					            {
					                "color": "#f2e5d4"
					            }
					        ]
					    },
					    {
					        "featureType": "poi.park",
					        "elementType": "geometry",
					        "stylers": [
					            {
					                "color": "#c5dac6"
					            }
					        ]
					    },
					    {
					        "featureType": "poi.park",
					        "elementType": "labels",
					        "stylers": [
					            {
					                "visibility": "on"
					            },
					            {
					                "lightness": 20
					            }
					        ]
					    },
					    {
					        "featureType": "road",
					        "elementType": "all",
					        "stylers": [
					            {
					                "lightness": 20
					            }
					        ]
					    },
					    {
					        "featureType": "road.highway",
					        "elementType": "geometry",
					        "stylers": [
					            {
					                "color": "#c5c6c6"
					            }
					        ]
					    },
					    {
					        "featureType": "road.arterial",
					        "elementType": "geometry",
					        "stylers": [
					            {
					                "color": "#e4d7c6"
					            }
					        ]
					    },
					    {
					        "featureType": "road.local",
					        "elementType": "geometry",
					        "stylers": [
					            {
					                "color": "#fbfaf7"
					            }
					        ]
					    },
					    {
					        "featureType": "water",
					        "elementType": "all",
					        "stylers": [
					            {
					                "visibility": "on"
					            },
					            {
					                "color": "#acbcc9"
					            }
					        ]
					    }
					]


	var ferry = {lat: -36.898712, lng: 174.907290};
	// var home = {lat: -36.903911 , lng: 174.914957};

  	// Create a map object and specify the DOM element for display.
  	var map = new google.maps.Map(document.getElementById('map'), {
    	center: ferry,
    	scrollwheel: false,
    	styles: style,
    	zoom: 16
  	});


  	var marker = new google.maps.Marker({
  		map: map,
        position: ferry
    });

    var infowindow = new google.maps.InfoWindow({
        content: '<div id="content">We are here</div>'
    });

    infowindow.open(map, marker);


  	if(geo_position_js.init()){

       geo_position_js.getCurrentPosition(
        function(position){
            console.log(position);

            var home = {lat: position.coords.latitude, lng: position.coords.longitude};
            var directionsDisplay = new google.maps.DirectionsRenderer({
                map: map
            });

            var request = {
			    destination: ferry,
			    origin: home,
			    travelMode: google.maps.TravelMode.DRIVING
			};

			var directionsService = new google.maps.DirectionsService();
                directionsService.route(request, function(response, status) {

                if (status == google.maps.DirectionsStatus.OK) {
                    // Display the route on the map.
                    directionsDisplay.setDirections(response);
                }
            });

            var infowindow1 = new google.maps.InfoWindow({
                content: '<div id="content">You are here</div>'
            });

            var marker2 = new google.maps.Marker({
                position: home,
            });

            // To show the info window as soon as you load the page
           
            infowindow1.open(map, marker2);


        },
	        function(error){

	            console.log(error); 

	        });

    }
    else{
       console.log("Functionality not available");
    }

}

//============ VALIDATION ===============



	// $("#form").validate({
	// 	rules:{
	// 		name: {
	// 			required: true
	// 		},
	// 		email: {
	// 			required: true,
	// 			email: true
	// 		},
	// 		message: {
	// 			required: true
	// 		}
	// 	},
	// 	messages: {
	// 		email: {
	// 			required: "Please enter your Email!",
	// 			email: "Please enter your Email!"
	// 		},
	// 		name: {
	// 			required: "Please enter your Name!"
	// 		}
	// 	},
	// 	highlight: function(element , errorClass){
	// 		$(element).addClass("animated shake");
	// 		$(element).one("animationend",function(){
	// 			$(this).removeClass("animated shake");
	// 		});
	// 	}
	// });

});
