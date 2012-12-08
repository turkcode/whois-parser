<?php
  
  $domain = 'google.com';
  $key = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'; // get your API key from http://whoisparser.com
	$host = "http://whoisparser.com/users/api/?key=$key&domain=$domain";
	$whoisData = file_get_contents($host);
	$results = json_decode($whoisData);
	print_r($results);

?>