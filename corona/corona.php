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
				<p id="num">
				<?php
				require("solieu.php");
				echo "$tata";
				?>
				</p>
			</div>
			<div class="detail">
				
				<div class="table">
					<?php
                        require("solieu.php");
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
						$confir = mysqli_query($conn, "SELECT ProvinceState, Confirmed FROM data ORDER BY data.Confirmed  DESC");
						$ind=0;
						while ($row = @mysqli_fetch_assoc($confir)){
                            echo "<ul>$row[ProvinceState] $row[Confirmed]</ul>";
                            $ind = $ind + 1;
						}
	 				?>
				</div>
			</div>
		</div>
		
		<div class="map">
			<div id="map">
				<script>
				var customLabel = {
					Hubei: {
					label: 'Hubei'
					},
					Guangdong: {
					label: 'B'
					}
				};
					function initMap() {
					var map = new google.maps.Map(document.getElementById('map'), {
					center: new google.maps.LatLng(23.141808, 113.143784),
					zoom:6
					});
					var infoWindow = new google.maps.InfoWindow;
			
					// Change this depending on the name of your PHP or XML file
					downloadUrl('llalal.php', function(data) {
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

							var mag = Confirmed * 0.2;
						
						
			
						var marker = new google.maps.Marker({
							map: map,
							position: point,
							icon: {
						path: google.maps.SymbolPath.CIRCLE,
						scale: mag,
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
			
					request.onreadystatechange = function() {
					if (request.readyState == 4) {
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
			<div id="lala">
				<h1>lalala</h1>
				
			</div>
		</div>

		<div class="right">
			<div class="deaths">
				<h1 id="Deaths">
					Tổng chết
				</h1>
				<p id="to">
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
						$death = mysqli_query($conn, "SELECT ProvinceState, Deaths FROM data ORDER BY data.Deaths  DESC");
						$ind=0;
						while ($row = @mysqli_fetch_assoc($death))
						{
	                        echo "<ul>$row[ProvinceState] $row[Deaths]</ul>";
	     					$ind = $ind + 1;
						}
		 			?>
				</div>	
			</div>

			<div class="recovered">
				<h1 id="Rec">Tổng hồi phục</h1>
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
						$revc= mysqli_query($conn, "SELECT ProvinceState, Recovered FROM data ORDER BY data.Recovered  DESC");
						$ind=0;
						while ($row = @mysqli_fetch_assoc($revc))
						{
	                        echo "<ul>$row[ProvinceState] $row[Recovered]</ul>";
	                         $ind = $ind + 1;
						}
		 			?>
				</div>	
			</div>
		</div>
	</div>
	
</body>
</html>
