

<?php 


echo "<br>-----------------------------------------------------<br>";

echo "recuperar datos de red<br><br>";

echo $_SERVER['REMOTE_ADDR']."<br>";
//echo $_SERVER['HTTP_X_FORWARDED_FOR']."<br>";
//echo $_SERVER['HTTP_CLIENT_IP']."<br>";
echo $_SERVER['HTTP_HOST']."<br>";

echo "<br>-----------------------------------------------------<br>";

$command="hostname";
$localIP = exec ($command);
echo $localIP;

echo "<br>-----------------------------------------------------<br>";

$command="ls -l";
$localIP = exec ($command);
echo $localIP;

echo "<br>-----------------------------------------------------<br>";

$ip = gethostbyname('hostname');
echo $ip;

echo "<br>-----------------------------------------------------<br>";

echo gethostname();

echo "<br>-----------------------------------------------------<br>";

echo php_uname('n');

echo "<br>-----------------------------------------------------<br>";

echo PHP_OS;

//escupe($_SERVER);



 $ip = file_get_contents('https://api.ipify.org');
    echo "My public IP address is: " . $ip;

?>