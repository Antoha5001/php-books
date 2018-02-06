<?php
	require "../libs.php";

	$curl = curl_init("https://500303.ru");
//	curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
	echo curl_exec($curl);
	curl_close($curl);

