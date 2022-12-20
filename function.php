<?php 
$db = mysqli_connect("localhost", "root", "", "web_ft");

function query($query){
    global $db;
    $query_awal = mysqli_query($db, $query);
    $result_query = [];

    while($res = mysqli_fetch_assoc($query_awal)){
        $result_query[] = $res;    
    };

    return $result_query;
};