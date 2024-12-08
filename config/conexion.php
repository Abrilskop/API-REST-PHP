<!-- conectar a bd  -->
 <?php
class Conectar{
    protected $dbh;
    protected function Conexion(){
        // controlar errores
        try{
            $conectar=$this->dbh=new PDO("mysql:host=localhost:3307;dbname=api-rest","root" ,"");
            return $conectar;

        }catch(Exception $e){
            print "|Error DB:".$e->getMessage()."<br/>";
            die();
        }
    }
}
public function set_name(){
    return $this->dbh->query("SET NAMES 'utf8'");
}
 ?>
