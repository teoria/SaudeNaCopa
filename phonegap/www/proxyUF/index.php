<?php 	header('Access-Control-Allow-Origin: *');	header('Content-Type: application/json');	if(isset($_POST['latLng'])) {		$ll = $_POST['latLng'];		$url = "http://maps.googleapis.com/maps/api/geocode/json?latlng=$ll&sensor=false";		$res = file_get_contents($url);		echo $res;	}?>