<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "mitmproxy:8080");
curl_setopt($ch, CURLOPT_URL, "https://github.com");
curl_exec($ch);
curl_close($ch);
