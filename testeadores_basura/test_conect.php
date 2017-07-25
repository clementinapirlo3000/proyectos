<?php


$response = null;
$ping = system("ping -c 1 google.com", $response);
if($response == 0)
{
    echo "<br>entro al if";
}





function is_connected()
{
    $connected = @fsockopen("www.google.org", 80); 
    //website, port  (try 80 or 443)
    if ($connected){
        $is_conn = true; //action when connected
        echo "<br><br>conecto con fsockopen a GOOGLE.COM";
        fclose($connected);
    }else{
        echo "<br><br>NO HAY INTERNET";
        $is_conn = false; //action in connection failure
    }
    return $is_conn;

}

is_connected();

function Set_ip_publica()
{
        
        $ip = file_get_contents('https://api.ipify.org');       
        return $ip;
}

echo "<br>".Set_ip_publica();

?>