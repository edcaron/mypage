<?php
	$url=$_GET['url'];
	
	$ch = curl_init($url);
	$fp = fopen("pagina_exemplo.txt", "w");

	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_HEADER, true);
	
	curl_exec($ch);
	curl_close($ch);

	fclose($fp);

?>
