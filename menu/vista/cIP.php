<?PHP
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
		string $dti_ipent = "",
	   	string $dti_deipcol = "",
	   	int $id_del_usuario = 1 ,
	   	string $server_name = "",
	   	string $server_addr = "",
	   	string $remote_addr = "",
	   	string $http_host = "",
	   	string $http_user_agent = ""
	   	
	)
	{
        $this->dti_ipent = $_SERVER['SERVER_NAME']; 
	   	$this->dti_deipcol = "NULL";
	   	$this->id_del_usuario = $id_del_usuario;
	   	$this->server_name = $_SERVER['SERVER_NAME'];
	   	$this->server_addr = $_SERVER['SERVER_ADDR'];
	   	$this->remote_addr = $_SERVER['REMOTE_ADDR'];
	   	$this->http_host = $_SERVER['HTTP_HOST'];
	   	$this->http_user_agent = $_SERVER['HTTP_USER_AGENT'];
	   	
    }
    	
    Public function Set_ip()
    {

	    $ip_objeto_conexion_BD	=	new clase_conecta_postgresql;
			$query_de_la_ip	= "
			INSERT INTO proyectos.pro_dtipent( dti_ipent, dti_deipcol, dti_feing, id_pro_usuar_pro_usuar , dti_server_name, dti_server_addr, dti_remote_addr, dti_http_host, dti_http_user_agent)
			VALUES ('$this->dti_ipent', '$this->dti_deipcol', 'NOW()', $this->id_del_usuario, '$this->server_name', '$this->server_addr', '$this->remote_addr', '$this->http_host', '$this->http_user_agent')
			";	
			$ip_objeto_conexion_BD->ejecutar_sql($query_de_la_ip);		
	}
} 
?>
