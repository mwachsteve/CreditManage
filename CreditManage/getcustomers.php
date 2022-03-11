<?php

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);     
// request list of contacts from Web API 
$json = file_get_contents('https://localhost:44327/api/customers', false, stream_context_create($arrContextOptions));

// deserialize data from JSON 
$contacts = json_decode($json); 
print_r($contacts);
?>