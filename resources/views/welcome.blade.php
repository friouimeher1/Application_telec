
		<title>All Artisan</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>

	<body>
		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Find Artisan
						</div>
						<div class="panel-body">
							<script src="http://maps.google.com/maps/api/js?sensor=false"
											 type="text/javascript"></script>

							 <div id="map" style="width: 1100px; height: 700px;"></div>

							 <script type="text/javascript">

	//----------------------------------------------------------------------------------------------------------------------------------------


							 var x = document.getElementById("map");


																if (navigator.geolocation) {
																		navigator.geolocation.getCurrentPosition(showPosition);
																} else {
																	alert( "Geolocation is not supported by this browser.");
																}
																	var lat,lng;

																		function showPosition(position) {
																				lat=position.coords.latitude ;
																				lng= position.coords.longitude;
																				var marker1 = new google.maps.Marker({
																							 position: new google.maps.LatLng(lat,lng),
																							 icon:'Marker.png',
																							 map: map

																						 });
																						marker1.addListener('click', function() {
																							 infowindow.setContent("Voici votre position actuelle");
																							 infowindow.open(map, marker1);
																						 });

}



	//-------------------------------------------------------------------------------------------------------------------------------------------------






	var locations = [
									 @foreach($c as $l)
									 ['{{$l->name}}',{{$l->lat}} , {{$l->lng}}, {{$l->id}},'{{$l->adresse}}'],
							 @endforeach
							 ];
							// alert("p");



								 var map = new google.maps.Map(document.getElementById('map'), {
									 zoom: 15,

									 center: new google.maps.LatLng(35.853775, 10.6059157),
									 mapTypeId: google.maps.MapTypeId.ROADMAP
								 });

								 var infowindow = new google.maps.InfoWindow();

								 var marker, i;

								 for (i = 0; i < locations.length; i++) {
									 marker = new google.maps.Marker({
										 position: new google.maps.LatLng(locations[i][1], locations[i][2]),
									 icon : 'marker.png',
										 //icon : "<img height="50" width="50" src ="+locations[i][4]+">",
										 map: map
									 });
									 google.maps.event.addListener(marker, 'click', (function(marker, i) {
													 return function() {
															 var url = '{{route("show",":id")}}';//welcome.show
															 url = url.replace(':id', locations[i][3]);
															 infowindow.setContent(
															//  '<br><img class="img-circle" width="52%" src=uploads/professionals/'+locations[i][4]+" ><p> Contacter : "+locations[i][6]

															'<p> Name :'+locations[i][0]+

															 '<p>Adresse :'+locations[i][4]+


															 '<p><a  href="'+url+'">'+"<strong>Profil<strong>"+'</a>');
															 infowindow.open(map, marker);
													 }
											 })(marker, i));
	//----------------------------------------------------------------------------------------------------------------------------------------------

	//----------------------------------------------------------------------------------------------------------------------------------------------------
								 }

						 </script>
						</div>
					</div>
				</div>
			</div>
		</div>
