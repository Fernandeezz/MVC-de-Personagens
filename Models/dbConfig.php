<!-- DbConfig -->
<?php 
class DbConfig
{
    private $_host = ''; 
    private $_username = '';
    private $_password = '';
    private $_database = 'mvcpersonagem';
    protected $connection; 

    public function __construct()
    {
    
        if (!isset($this->connection)){
            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            if (!$this->connection){
                echo "Não foi possivel acessar o banco de dados";
                exit;
            }
        }
    }
}
$servidor = "";
$usuario = "";
$senha = "";
$dbname = "";
	
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
	die("Falha na conexao: " . mysqli_connect_error());
}	
?>
