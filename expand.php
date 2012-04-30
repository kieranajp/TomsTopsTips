<?php
	$url = "http://expandurl.appspot.com/expand?url=".$_GET['url'];
	$json = json_decode(file_get_contents($url), true);
	echo $json["start_url"];