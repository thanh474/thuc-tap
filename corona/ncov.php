<!DOCTYPE html>
<html>
<head>
	<title>Crona Virus 2020</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<link rel="stylesheet" type="text/css" href="cssmain.css">
	<link rel="stylesheet" type="text/css" href="/var/www/html/fonticon/css/all.css">
	<div class="header">
		<div class="name">
			<i class="fas fa-pills"></i>
			<p>Wuhan Coronavirus (2019-nCoV) Global Cases </p>
			<div class="menu">
				<div class="nav-menu">
					<ul>
						<li><a href=""><i class="fas fa-bars"></i>Menu</a></li>
					</ul>
				</div>
			</div>
		</div>		
	</div>
</head>
<body>
	
	<div class="all">
		<div class="left">
			<div class="total">
				<h1 id="tong">
					Tổng người nhiễm 
				</h1>
				<p id="num1">
				<?php
				require("solieu.php");
				echo "$tata";
				?>
				</p>
			</div>
			<div class="detail">
				<p id="ConfirmedCases"> Confirmed Cases by Country/Region</p>
				<div class="table1">
					<?php
                        require("solieu.php");

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
						$confir = mysqli_query($conn, "SELECT ProvinceState, Confirmed FROM hienthi where hienthi.Confirmed is not null  ORDER BY hienthi.Confirmed  DESC");
						$ind=0;
						while ($row = @mysqli_fetch_assoc($confir))
						{
							$prepend = "<span id='color1'>";
							$append  = '</span>';
							
							echo "<ul>
									<div >
										
										<p> $row[ProvinceState] $prepend $row[Confirmed] $append </p>
									</div>
								</ul>";

                            $ind = $ind + 1;
						}
	 				?>
				
				</div>
			</div>
		</div>
		
		<div class="map">
			<div id="map">
				<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
				<script type="text/javascript">
					var customLabel = {
						Hubei: {
						label: 'Hubei'
						},
						
					};
						function initMap() {
						var map = new google.maps.Map(document.getElementById('map'), {
						center: new google.maps.LatLng(30.737812, 112.238403),
						zoom:5.5
						});
						var infoWindow = new google.maps.InfoWindow;
				
						// Change this depending on the name of your PHP or XML file
						downloadUrl('locmax.php', function(data) {
							var xml = data.responseXML;
							var markers = xml.documentElement.getElementsByTagName('marker');
							Array.prototype.forEach.call(markers, function(markerElem) {
							var ProvinceState = markerElem.getAttribute('ProvinceState');
							var Confirmed = markerElem.getAttribute('Confirmed');
							var point = new google.maps.LatLng(
								parseFloat(markerElem.getAttribute('lat')),
								parseFloat(markerElem.getAttribute('lng')));
				
							var infowincontent = document.createElement('div');
							var strong = document.createElement('strong');
							strong.textContent = ProvinceState
							infowincontent.appendChild(strong);
							infowincontent.appendChild(document.createElement('br'));
				
							var text = document.createElement('text');
							text.textContent = Confirmed
							infowincontent.appendChild(text);
							var icon = customLabel[ProvinceState] || {};
							
							var marker = new google.maps.Marker({
								map: map,
								position: point,
								icon: {
							path: google.maps.SymbolPath.CIRCLE,
							scale: Confirmed* 0.003,
							fillColor: '#f00',
							fillOpacity: 0.55,
							strokeWeight: 0
							},
				
								label: icon.label
							});
							
							marker.addListener('click', function() {
								infoWindow.setContent(infowincontent);
								infoWindow.open(map, marker);
							});
							});
						});
						downloadUrl('locvag.php', function(data) {
							var xml = data.responseXML;
							var markers = xml.documentElement.getElementsByTagName('marker');
							Array.prototype.forEach.call(markers, function(markerElem) {
							var ProvinceState = markerElem.getAttribute('ProvinceState');
							var Confirmed = markerElem.getAttribute('Confirmed');
							var point = new google.maps.LatLng(
								parseFloat(markerElem.getAttribute('lat')),
								parseFloat(markerElem.getAttribute('lng')));
				
							var infowincontent = document.createElement('div');
							var strong = document.createElement('strong');
							strong.textContent = ProvinceState
							infowincontent.appendChild(strong);
							infowincontent.appendChild(document.createElement('br'));
				
							var text = document.createElement('text');
							text.textContent = Confirmed
							infowincontent.appendChild(text);
							var icon = customLabel[ProvinceState] || {};

							var marker = new google.maps.Marker({
								map: map,
								position: point,
								icon: {
							path: google.maps.SymbolPath.CIRCLE,
							scale: Confirmed* 0.06,
							fillColor: '#f00',
							fillOpacity: 0.55,
							strokeWeight: 0
							},
				
								label: icon.label
							});
							
							marker.addListener('click', function() {
								infoWindow.setContent(infowincontent);
								infoWindow.open(map, marker);
							});
							});
						});
						downloadUrl('locmin.php', function(data) {
							var xml = data.responseXML;
							var markers = xml.documentElement.getElementsByTagName('marker');
							Array.prototype.forEach.call(markers, function(markerElem) {
							var ProvinceState = markerElem.getAttribute('ProvinceState');
							var Confirmed = markerElem.getAttribute('Confirmed');
							var point = new google.maps.LatLng(
								parseFloat(markerElem.getAttribute('lat')),
								parseFloat(markerElem.getAttribute('lng')));
				
							var infowincontent = document.createElement('div');
							var strong = document.createElement('strong');
							strong.textContent = ProvinceState
							infowincontent.appendChild(strong);
							infowincontent.appendChild(document.createElement('br'));
				
							var text = document.createElement('text');
							text.textContent = Confirmed
							infowincontent.appendChild(text);
							var icon = customLabel[ProvinceState] || {};

							var marker = new google.maps.Marker({
								map: map,
								position: point,
								icon: {
							path: google.maps.SymbolPath.CIRCLE,
							scale: Confirmed* 0.6,
							fillColor: '#f00',
							fillOpacity: 0.55,
							strokeWeight: 0
							},
				
								label: icon.label
							});
							
							marker.addListener('click', function() {
								infoWindow.setContent(infowincontent);
								infoWindow.open(map, marker);
							});
							});
						});
						}
				
					function downloadUrl(url, callback) {
						var request = window.ActiveXObject ?
							new ActiveXObject('Microsoft.XMLHTTP') :
							new XMLHttpRequest;
				
						request.onreadystatechange = function() 
						{
							if (request.readyState == 4)
							{
								request.onreadystatechange = doNothing;
								callback(request, request.status);
							}
						};
				
						request.open('GET', url, true);
						request.send(null);
					}
				
					function doNothing() {}
				</script>
				<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0AuobOWfougXSIeUMHrqf9GYNz1l2Iw0&callback=initMap">
				</script>
			</div>	
		</div>
		
		<div class="chartright">
			<div class="right">
				<div class="deaths">
					<h1 id="Deaths">
						Tổng chết
					</h1>
					<p id="ta">
					<?php
					require("solieu.php");
					echo "$totaldeath";				
					?>
					</p>
					
					<div class="table">
					<?php
							
							require("solieu.php");

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							$death = mysqli_query($conn, "SELECT ProvinceState, Deaths FROM hienthi where hienthi.Deaths != 0 ORDER BY hienthi.Deaths  DESC");
							$ind=0;
							while ($row = @mysqli_fetch_assoc($death)){
								$prepend = "<span id='color1'>";
								$append  = '</span>';
								echo "<ul>
										<div >
											<h3>$row[ProvinceState] </h3>
											<p> $prepend $row[Deaths] $append Deaths </p>
										</div>
									</ul>";
								$ind = $ind + 1;
							}
						?>
					
					</div>
					
				</div>
				<div class="recovered">
					<h1 id="Rec">
						Tổng hồi phục
					</h1>
					<p id="to">
					<?php
					require("solieu.php");
					echo "$totalrec";				
					?>
					</p>
					<div class="table">
					<?php
							
							require("solieu.php");

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							$revc= mysqli_query($conn, "SELECT ProvinceState, Recovered FROM hienthi where hienthi.Recovered != 0 ORDER BY hienthi.Recovered  DESC");
							$ind=0;
							while ($row = @mysqli_fetch_assoc($revc)){
								$prepend = "<span id='color2'>";
								$append  = '</span>';
								echo "<ul>
										<div >
											<h3>$row[ProvinceState] </h3>
											<p> $prepend $row[Recovered] $append Recovered </p>
										</div>
									</ul>";
								$ind = $ind + 1;
							}
						?>
					
					</div>
			
					
				</div>
			</div>
			<div class="chart">
				<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
				<script type="text/javascript">
		
					google.charts.load('current', {'packages':['corechart']});
					google.charts.setOnLoadCallback(drawChart);
					
					
					function drawChart() {
						$cof0 = <?php include "loop.php";echo $cof[0];?>;
						$cof1 = <?php include "loop.php";echo $cof[1];?>;
						$cof2 = <?php include "loop.php";echo $cof[2];?>;
						$cof3 = <?php include "loop.php";echo $cof[3];?>;
						$cof4 = <?php include "loop.php";echo $cof[4];?>;
						$cof5 = <?php include "loop.php";echo $cof[5];?>;
						$cof6 = <?php include "loop.php";echo $cof[6];?>;
						$cof7 = <?php include "loop.php";echo $cof[7];?>;
						$cof8 = <?php include "loop.php";echo $cof[8];?>;
						$cof9 = <?php include "loop.php";echo $cof[9];?>;
						$cof10 = <?php include "loop.php";echo $cof[10];?>;
						$cof11 = <?php include "loop.php";echo $cof[11];?>;
						$cof12 = <?php include "loop.php";echo $cof[12];?>;
						$cof13 = <?php include "loop.php";echo $cof[13];?>;
						$cof14 = <?php include "loop.php";echo $cof[14];?>;
						$def0 = <?php include "loop.php";echo $def[0];?>;
						$def1 = <?php include "loop.php";echo $def[1];?>;
						$def2 = <?php include "loop.php";echo $def[2];?>;
						$def3 = <?php include "loop.php";echo $def[3];?>;
						$def4 = <?php include "loop.php";echo $def[4];?>;
						$def5 = <?php include "loop.php";echo $def[5];?>;
						$def6 = <?php include "loop.php";echo $def[6];?>;
						$def7 = <?php include "loop.php";echo $def[7];?>;
						$def8 = <?php include "loop.php";echo $def[8];?>;
						$def9 = <?php include "loop.php";echo $def[9];?>;
						$def10 = <?php include "loop.php";echo $def[10];?>;
						$def11 = <?php include "loop.php";echo $def[11];?>;
						$def12 = <?php include "loop.php";echo $def[12];?>;
						$def13 = <?php include "loop.php";echo $def[13];?>;
						$def14 = <?php include "loop.php";echo $def[14];?>;
						$ref0 = <?php include "loop.php";echo $ref[0];?>;
						$ref1 = <?php include "loop.php";echo $ref[1];?>;
						$ref2 = <?php include "loop.php";echo $ref[2];?>;
						$ref3 = <?php include "loop.php";echo $ref[3];?>;
						$ref4 = <?php include "loop.php";echo $ref[4];?>;
						$ref5 = <?php include "loop.php";echo $ref[5];?>;
						$ref6 = <?php include "loop.php";echo $ref[6];?>;
						$ref7 = <?php include "loop.php";echo $ref[7];?>;
						$ref8 = <?php include "loop.php";echo $ref[8];?>;
						$ref9 = <?php include "loop.php";echo $ref[9];?>;
						$ref10 = <?php include "loop.php";echo $ref[10];?>;
						$ref11 = <?php include "loop.php";echo $ref[11];?>;
						$ref12 = <?php include "loop.php";echo $ref[12];?>;
						$ref13 = <?php include "loop.php";echo $ref[13];?>;
						$ref14 = <?php include "loop.php";echo $ref[14];?>;

        
          
						var data = google.visualization.arrayToDataTable([
							['Time', 'Confirmed', 'Deaths', 'Recovered'],
							['Jan 26', $cof0,   $def0,  $ref0],
							['Jan 27', $cof1,   $def1,  $ref1],
							['Jan 28',  $cof2,   $def2,  $ref2],
							['Jan 29',  $cof3,   $def3,  $ref3],
							['Jan 30',  $cof4,   $def4,  $ref4],
							['Jan 31',  $cof5,   $def5,  $ref5],
							['Feb 1' ,  $cof6,   $def6,  $ref6],
							['Feb 2' ,  $cof7,   $def7,  $ref7],
							['Feb 3' ,  $cof8,   $def8,  $ref8],
							['Feb 4' ,  $cof9,   $def9,  $ref9],
							['Feb 5' ,  $cof10,   $def10,  $ref10],
							['Feb 6' ,  $cof11,   $def11,  $ref11],
							['Feb 7' ,  $cof12,   $def12,  $ref12],
							['Feb 8' ,  $cof13,   $def13,  $ref13],
							['Feb 9' ,  $cof14,   $def14,  $ref14],

						]);
						var options = {
							curveType: 'function',
							legend: { position: 'bottom',textStyle: {color: 'white'} },
							pointSize: 10,
							backgroundColor: '#272626',
							colors:['#FFFF00', 'red', '#2EE711' ], 
							pointsVisible: true,
								vAxis: {
									title: 'Total confermed case',
									format: 'short',
									textStyle: {
									color: 'white',
									fontSize: 10,    
									},
							titleTextStyle: {
									color: 'white',
									fontSize: 10,
									}
								}, 
							hAxis: {
								textStyle: {
								color: 'white',
								fontSize: 12,
								}
							},
						};
						var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
						chart.draw(data, options);
					}
				</script>
	  			<div id="curve_chart"></div>
			</div>
		</div>
	</div>
</body>
</html>
