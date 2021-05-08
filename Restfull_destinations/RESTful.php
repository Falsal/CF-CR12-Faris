<?php

function build_query_string(array $params) {
    $query_string = http_build_query($params);
    //generates URL-encoded for a query string
    return $query_string;
} 

function curl_get($url) {
    $client = curl_init($url);
    //Initializes a new CURL and prepares for next step

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    // CURL transfer/means produces a string that can be stored in place of passing it directly,3rd Param will pass an object
    $response = curl_exec($client);
    //it executes the CURL and return a string 
    curl_close($client);
    //Closes a CURL session and frees all resources.
    return $response;
}