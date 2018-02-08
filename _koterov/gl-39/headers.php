<?php

	function getHeaders($url){
		$curl = curl_init($url);

		curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($curl, CURLOPT_HEADER,1);
		curl_setopt($curl, CURLOPT_NOBODY,1);


		$headers = curl_exec($curl);
		curl_close($curl);

		return explode("r/n/",$headers);
	}

	$url = "https://500303.ru";

	echo "<pre>";
	print_r(getHeaders($url));
	echo "</pre>";

