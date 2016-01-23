<?php

$Url = "http://m.alelo.com.br/alelomobile/se.do";
$ch = curl_init();

    // Now set some options (most are optional)

    // Set URL to download
    curl_setopt($ch, CURLOPT_URL, $Url);

    // Set a referer
    curl_setopt($ch, CURLOPT_REFERER, "http://m.alelo.com.br/alelomobile/inicio.do");

    // User agent
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36");

    // Include header in result? (0 = yes, 1 = no)
    curl_setopt($ch, CURLOPT_HEADER, 0);

    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('cartao' => '5067640685860035', 'tipo' => 3)));//"cartao=5067640685860035");

    // Download the given URL, and return output
    $output = curl_exec($ch);

    // Close the cURL resource, and free system resources
    curl_close($ch);

    echo '<pre>';
print_r($output);
echo '</pre>';