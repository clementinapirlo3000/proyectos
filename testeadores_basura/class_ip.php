<?PHP
// class_ip.php
	
class Almacenar_datos_entorno
{ 

   	public $dti_ipent;
   	public $dti_deipcol;
   	public $id_del_usuario;
   	public $server_name;
   	public $server_addr;
   	public $http_host;
   	public $http_user_agent;
	

	public function __construct
	( 
		string $dti_ipent = "0.0.0.0";
	   	string $dti_deipcol "0.0.0.0";
	   	int $id_del_usuario = 0 ;
	   	string $server_name = $_SERVER['SERVER_NAME'];
	   	string $server_addr = $_SERVER['SERVER_ADDR'];
	   	string $remote_addr = $_SERVER['REMOTE_ADDR'];
	   	string $http_host = $_SERVER['HTTP_HOST'];
	   	string $http_user_agent = $_SERVER['HTTP_USER_AGENT'];
	)
	{
        $dti_ipent;
	   	$dti_deipcol;
	   	$id_del_usuario;
	   	$server_name;
	   	$server_addr;
	   	$remote_addr
	   	$http_host;
	   	$http_user_agent;
    }

    public function getProducer()
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }


	
    Public Almacenar()
    {
	    $ip_objeto_conexion_BD	=	new clase_conecta_postgresql;
		$query_de_la_ip	= "INSERT INTO proyectos.pro_dtipent( dti_ipent, dti_deipcol, dti_feing, id_pro_usuar_pro_usuar ,pro_SERVER_NAME, pro_SERVER_ADDR, pro_REMOTE_ADDR, pro_HTTP_HOST, pro_HTTP_USER_AGENT)
		VALUES ($this->$dti_ipent, $this->$dti_deipcol, NOW(), $this->$id_del_usuario, $this->$server_name, $this->$server_addr, $this->$remote_addr, $this->$http_host, $this->$http_user_agent)";	
		$ip_objeto_conexion_BD->ejecutar_sql($query_de_la_ip);
	}
}

$product1 = new Almacenar_datos_entorno()

    
	
?>


<?PHP

// Rapida
$TEST = true;
    
$dti_ipent = "0.0.0.0";
$dti_deipcol "0.0.0.0";
$id_del_usuario = 0 ;
$server_name = $_SERVER['SERVER_NAME'];
$server_addr = $_SERVER['SERVER_ADDR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];
$http_host = $_SERVER['HTTP_HOST'];
$http_user_agent = $_SERVER['HTTP_USER_AGENT'];		

if ($TEST) { 	
	$ip_objeto_conexion_BD	=	new clase_conecta_postgresql;
	$query_de_la_ip	= "
	INSERT INTO proyectos.pro_dtipent( dti_ipent, dti_deipcol, dti_feing, id_pro_usuar_pro_usuar ,pro_SERVER_NAME, pro_SERVER_ADDR, pro_REMOTE_ADDR, pro_HTTP_HOST, pro_HTTP_USER_AGENT)
	VALUES ($dti_ipent, $dti_deipcol, NOW(), $id_del_usuario, $server_name, $server_addr, $remote_addr, $http_host, $http_user_agent)
	";	
	$ip_objeto_conexion_BD->ejecutar_sql($query_de_la_ip);		
} 
?>
