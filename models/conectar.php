<?php
//definimos las clases para conectarnos a la bse de datos

require_once('db.php');//me traiGo las contantes declaradas
class Config{
    private $id_persona;
    private $nombresRegistro;
    private $apellidosRegistro;
    private $documentoRegistro;
    private $fechanacRegistro;
    protected $dbCnx;

    public function __construct($id_persona=0, $nombresRegistro=0, $apellidosRegistro=0, $documentoRegistro=0, $fechanacRegistro=0){
        $this->id_persona = $id_persona;
        $this->nombresRegistro = $nombresRegistro;
        $this->apellidosRegistro = $apellidosRegistro;
        $this->documentoRegistro = $documentoRegistro;
        $this->fechanacRegistro = $fechanacRegistro;
        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.":dbname=".DB_NAME, DB_USER, DB_PASSWORD,[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);

    }
    public function setId_persona($id_persona){
        $this->id_persona = $id_persona;
    }
    public function getId(){
        return $this->id_persona;
    }
    //nombre
    public function setNombresRegistros($nombresRegistro){
        $this->nombresRegistro = $nombresRegistro;
    }
    public function getNombresRegistros(){
        return $this->nombreRegistro;
    }
    //apellido
    public function setApellidosRegistro($apellidosRegistro){
        $this->apellidosRegistro = $apellidosRegistro;
    }
    public function getApellidosRegistro(){
        return $this->apellidosRegistro;
    }
    //documento
    public function setDocumentosRegistro($documentoRegistro){
        $this->documentoRegistro = $documentoRegistro;
    }
    public function getDocumentosRegistros(){
        return $this->documentoRegistro;
    }
    //fecha nacimiento
    public function setFechanacRegistro($fechanacRegistro){
        $this->fechanacRegistro= $fechanacRegistro;
    }
    public function getFechanacRegistro(){
        return $this -> fechanacRegistro;
    }
    //especificamos el guardar el registro de datos
    public function inserData(){
        try {
            $stm =$this->dbCnx->prepare("INSERT INTO registro (nombres, apellidos, documento, fechanacimiento) values (?,?,?,?)");
            $stm -> execute([$this->nombresRegistros, $this->apellidosRegistro, $this->documentoRegistros, $this->fechanacRegistro]);
        } catch (\Exception $te) {
            return $e ->getMessage();
        }
    }

    //aqui recuperamos los datos/registros de la tabla
    public function obtainAll(){
        try {
            $stm = $this->dbCnx->prepare("DELETE FROM * formulario");
            $stm -> execute (); //ejecutar la sentencia
            return $stm -> fetchAll();//retorna todos los resgitros de la tabla
        } catch (\Exception $e) {
            return $e -> getMessage();
        }
    }
    //borrar los registros de la tabla
    public function delete(){
        try {
            $stm = $this -> dbCnx -> prepare("DELETE FROM * campers WHERE id=?");//sentencia de borrar
            $stm -> execute ([$this->id]);
            return $stm -> fetchAll();
            echo"<script>alert('Registro Eliminado'); document.location='index.php'</script>";
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}

?>