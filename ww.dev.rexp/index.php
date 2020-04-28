<?php
//echo "dev---entorno----";

// function call($arg){
// $http=$_SERVER["REQUEST_SCHEME"];
// $host= $_SERVER["SERVER_NAME"];
// $puerto= $_SERVER["SERVER_PORT"];
// $api="api.1.0";
// $url="{$http}://{$host}:{$puerto}/{$api}/{$arg}";
//   return  $data = json_decode( file_get_contents($url),true);
// }
$valor1 = $_GET['valor1'];
$valor2 = $_GET['valor2'];
$valor3 = $_GET['valor3'];
/* $http=$_SERVER["REQUEST_SCHEME"];
$host= $_SERVER["SERVER_NAME"];
$puerto= $_SERVER["SERVER_PORT"];
$api="api.1.0.0";
$url="{$http}://{$host}:{$puerto}/{$api}/{$valor1}"; */
//$data = json_decode( file_get_contents($url),true);
//$data= call($valor1);
$http = $_SERVER["REQUEST_SCHEME"];
$host = $_SERVER["SERVER_NAME"];
$puerto = $_SERVER["SERVER_PORT"];
$api = "api.1.0";
// $url = "{$http}://{$host}:{$puerto}/{$api}/{$arg}";
$url = "https://localhost/api/";
$opts = array(
  'http' =>
  array(
    "method"  => "POST",
    "header"  => "Authorization: Basic ZWRpc29uOnphbW9yYTE5OTA="
    // 'content' => "baz=bomb&id=5"
    //'timeout' => 60//
  ),
  "ssl" => array(
    "verify_peer" => false,
    "verify_peer_name" => false,
  )
);

$context  = stream_context_create($opts);
header('Content-Type: application/json');
//echo file_get_contents($url, true, $context);
echo json_encode(get_headers($url, 1, $context), true);
//echo var_dump(json_decode(file_get_contents($url, true, $context), true));
//echo var_dump(get_headers($url, 1)) . "<br>";

// ECHO $data[0]['conf'].PHP_EOL;
// ECHO $data[0]['data'][0]["idusuario"].PHP_EOL;
// ECHO $data[0]['data'][0]["apellido"].PHP_EOL;
// ECHO $data[0]['data'][0]["nombre"].PHP_EOL;
// ECHO $data[0]['data'][0]["apellido"].PHP_EOL;
// ECHO var_dump(apache_response_headers());

//ECHO var_dump($data);


/* $alterar= function ($variable){
    echo $variable;
};
$alterar("Saludo"); */
/**
 *    
 * 
 */
/* $func = array("Foo", "bar");
$func(); // imprime "bar"
$func = array(new Foo, "baz");
$func(); // imprime "baz"
$func = "Foo::bar"; */
