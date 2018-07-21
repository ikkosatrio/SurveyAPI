


			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Content area -->
				<div class="content">
					<div class="row">
						<div class="col-lg-12">

							<!-- Marketing campaigns -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<!-- <h6 class="panel-title">Marketing campaigns</h6> -->
								</div>
								<div class="panel-body">
									<h1>No Urut :  <?=$survey->NoUrut ?></h1>
									<div class="row">
										<div class="col-md-12">

											<!-- Basic legend -->
											<form action="#" readonly="true">
												<div class="panel panel-flat">
													<div class="panel-heading">
														<h5 class="panel-title">Detail Pelanggan <?=$survey->IDPel ?><a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
														<div class="heading-elements">
															<ul class="icons-list">
						                		
						                	</ul>
					                	</div>
													</div>

													<div class="panel-body">
														<div class="row">
															<div class="col-md-6">
																<fieldset>
																<legend class="text-bold">Basic</legend>

																<div class="form-group">
																	<label>Nama:</label>
																	<input type="text" class="form-control" value="<?=$survey->Nama?>">
																</div>

																<div class="form-group">
																	<label>Alamat:</label>
																	<input type="text" class="form-control" value="<?=$survey->Alamat?>">
																</div>

																<div class="form-group">
																	<label>Wilayah:</label>
																	<input type="text" class="form-control" value="<?=$survey->Wilayah?>">
																</div>

																<div class="form-group">
																	<label>Tanggal Survey 1:</label>
																	<input type="text" class="form-control" value="<?=$survey->Tanggal1?>">
																</div>

																<div class="form-group">
																	<label>Jumlah Lampu</label>
																	<input type="text" class="form-control" value="<?=$survey->JumlahLampu?>">
																</div>
																<div class="form-group">
																	<label>Daya</label>
																	<input type="text" class="form-control" value="<?=$survey->Daya?>">
																</div>

																<div class="form-group">
																	<label>Kondisi Box</label>
																	<a style="width:10%;" data-fancybox href="<?=base_url().'assets/'.$survey->IDPel.'.jpg'?>"><img class="panel" src="<?=base_url().'assets/'.$survey->IDPel.'.jpg'?>" style="width:20%;"></a>
																</div>

															</fieldset>
															</div>
															<div class="col-md-6">
																<div class="row">
																	<fieldset>
																		<legend class="text-bold">Sisi PLN</legend>

																		<div class="form-group">
																			<label>KWH Meter</label>
																			<input type="text" class="form-control" <?=$survey->Nama?>>
																		</div>

																		<div class="form-group">
																			<label>Pemabatas Daya</label>
																			<input type="text" class="form-control" <?=$survey->Nama?>>
																		</div>
																	</fieldset>
																</div>
																<div class="row">
																	<fieldset>
																		<legend class="text-bold">Sisi PJU</legend>

																		<div class="form-group">
																			<label>JUMLAH MCB</label>
																			<input type="text" class="form-control" value="<?=$survey->JumlahMCB?>">
																		</div>

																		<div class="form-group">
																			<label>MCB</label>
																			<input type="text" class="form-control"  value="<?=$survey->MCB?>">
																		</div>

																		<div class="form-group">
																			<label>Kontaktor</label>
																			<input type="text" class="form-control"  value="<?=$survey->Kontaktor?>">
																		</div>

																		<div class="form-group">
																			<label>Switch</label>
																			<input type="text" class="form-control"  value="<?=$survey->Switchs?>">
																		</div>

																		<div class="form-group">
																			<label>Grounding</label>
																			<input type="text" class="form-control"  value="<?=$survey->Grounding?>">
																		</div>
																	</fieldset>
																</div>
																<div class="row">
																	<fieldset>
																		<legend class="text-bold">Hasil Ukur</legend>
																		
																		<div class="form-group">
																			<label>CosPhi</label>
																			<input type="text" class="form-control" value="<?=$survey->CosPhi?>">
																		</div>
																	<fieldset>
																</div>

															</div>
														</div>
														<div class="row">
																<div class="col-md-12">
																	<div class="panel" id="map" style="width:100%;height:500px;">

																	</div>
																</div>
														</div>
														<div class="text-right">
															<!-- <button type="submit" class="btn btn-primary legitRipple">Submit form <i class="icon-arrow-right14 position-right"></i></button> -->
														</div>
													</div>
												</div>
											</form>
											<!-- /basic legend -->

										</div>
									</div>
								</div>
							</div>
							<!-- /latest posts -->

						</div>
					</div>
					<script type="text/javascript">
						 var map;
						 var infoWindow = new google.maps.InfoWindow();
						 function initialize() {
							 var uluru = {lat: <?=$survey->Latitude?>, lng: <?=$survey->Longitude?>};
			         map = new google.maps.Map(document.getElementById('map'), {
			           zoom: 15,
			           center: uluru,
								 zoomControl: true,
							   mapTypeControl: true,
							   scaleControl: true,
							   rotateControl: true,
							   fullscreenControl: true,
								 disableDefaultUI: true,
								 styles: [
								    {
								      "featureType": "poi",
								      "stylers": [
								        { "visibility": "off" }
								      ]
								    }
								  ]
			         });

			         var marker = new google.maps.Marker({
			           position: uluru,
			           map: map,
								 icon: "<?=base_url()?>assets/Theme/maps/box.png"
			         });
							 getlampu();
						 }
						 var arrMarker = new Array();
						 var arrPoly = [];

						 function drawRute(Poly) {
							 var lampPath = new google.maps.Polyline({
			           path: Poly,
			           geodesic: true,
			           strokeColor: '#FF0000',
			           strokeOpacity: 1.0,
			           strokeWeight: 2
			         });
							 lampPath.setMap(map);
						 }

						 function getlampu(){
							 $.ajax({
								 type: 'GET',
								 url: '<?=base_url('main/getlampuajax')?>',
								 data: { IDPel: <?=$survey->IDPel ?> },
								 dataType: 'json',
								 success: function (data) {
										 $.each(data, function(index, element) {
											 // console.log(element.Latitude);
											 addMarker(element);
											 var position = new google.maps.LatLng(element.Latitude, element.Longitude);
											 arrPoly.push(position);
										 });
										 drawRute(arrPoly);

								 }
							});
						 }



						 function addMarker(element){
							 // var bounds = new google.maps.LatLngBounds();
							 var marker = new google.maps.Marker({
										map: map,
										icon: "<?=base_url()?>assets/Theme/maps/lamp.png",
										position: new google.maps.LatLng(element.Latitude,element.Longitude)
								});

								var windowContent = "<div class='panel'><h2 class='center'>Foto</h2><a target='_blank' data-fancybox='gallery' href='http://2.bp.blogspot.com/-mZLmY8Q2GRY/U7eEVSJp0-I/AAAAAAAAAHI/EmLw5eJmPqc/s1600/LB+2+ISI+3+KWH+020.jpg'><img src='http://2.bp.blogspot.com/-mZLmY8Q2GRY/U7eEVSJp0-I/AAAAAAAAAHI/EmLw5eJmPqc/s1600/LB+2+ISI+3+KWH+020.jpg' style='height:100px' class='img'/></a></div>";
								infobox = new InfoBox({
									 content: infoWindow.setContent(windowContent),
									 alignBottom: true,
									 pixelOffset: new google.maps.Size(-160, -45)
								 });

								 google.maps.event.addListener(marker, 'click', function() {
		              infobox.open(map, marker);
		              infobox.setContent(windowContent);
		              map.panTo(marker.getPosition());
		              infobox.show();
		            });
		            google.maps.event.addListener(map, 'click', function() {
		              infobox.setMap(null);
		            });
 								// map.fitBounds(bounds);

								arrMarker.push(marker);
						 }
						 google.maps.event.addDomListener(window, 'load', initialize);
					</script>
