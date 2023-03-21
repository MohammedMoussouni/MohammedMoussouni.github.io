<?php
/***
Code d'un scraper avec Curl réalisé par Insimule.com
***/
function scraper ($url) {
//permet de récupérer le contenu d'une page
	// User Agent
	$ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0';
	$ch = curl_init();
	if (preg_match('`^https://`i', $url))
	{//pour les URLs en HTTPS
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	}
	curl_setopt($ch, CURLOPT_USERAGENT, $ua);
	curl_setopt($ch, CURLOPT_URL, $url );
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
	// le scraper suit les redirections
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$result = curl_exec($ch);
	curl_close ( $ch );
	return $result;
}
// L'URL du site à scraper
$url = 'https://assurancedudirigeant.com/tarif-mutuelle-en-ligne/';
echo '<pre>';
echo scraper($url);
echo '</pre>';
?>
		