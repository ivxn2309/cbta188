<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../utils/DBSettings.php";
class Docente {

	private $self = array();

	public function __construct( /*string*/ $id ) {
		$query = "SELECT id_docente, nombre, password FROM profesor WHERE id_docente='$id';";
		$result = mysql_query( $query );

		if( mysql_num_rows( $result ) > 0 ) {
			$profe = mysql_fetch_row( $result );
			$this->self['id'] = $profe[0];
			$this->self['nombre'] = $profe[1];
			$this->self['password'] = $profe[2];

			$query = "SELECT email, edad, profesion, certificaciones, intereses, citas, detalles, url FROM profesordata WHERE id_docente='$id'";
			$result = mysql_query( $query );

			if( mysql_num_rows( $result ) > 0 ) {
				$profe = mysql_fetch_row( $result );
				$this->self['email'] = $profe[0];
				$this->self['edad'] = $profe[1];
				$this->self['profesion'] = $profe[2];
				$this->self['certificaciones'] = $profe[3];
				$this->self['intereses'] = $profe[4];
				$this->self['citas'] = $profe[5];
				$this->self['detalles'] = $profe[6];
				$this->self['url'] = $profe[7];
			}
			else{
				$this->self['email'] = "";
				$this->self['edad'] = "";
				$this->self['profesion'] = "";
				$this->self['certificaciones'] = "";
				$this->self['intereses'] = "";
				$this->self['citas'] = "";
				$this->self['detalles'] = "";
				$this->self['url'] = "";
			}
		}
		else {
			echo "Docente sin registrar";
		}
	}

	public function __get( /*string*/ $name = null ) {
        return $this->self[$name];
    }

    public function set( /*string*/ $name, /*string*/ $value ){
    	$this->self[$name] = $value;
    }

    public function attr( /*array*/ $profe ){
    	$this->set("nombre", $profe["nombre"]);
    	$this->set("password", $profe["pass"]);
    	$this->set("email", $profe["email"]);
    	$this->set("edad", $profe["edad"]);
    	$this->set("profesion", $profe["profesion"]);
    	$this->set("certificaciones", $profe["certi"]);
    	$this->set("intereses", $profe["intereses"]);
    	$this->set("citas", $profe["frase"]);
    	$this->set("detalles", $profe["detalles"]);
    	$this->set("url", $profe["url"]);
    }

    public function save(){
    	$id = $this->self['id'];
    	$query = "SELECT id_docente FROM profesordata WHERE id_docente='$id'";
    	$result = mysql_query( $query );
    	$hasData = mysql_num_rows( $result );

    	$nombre = $this->self['nombre'];
    	$pass = $this->self['password'];
        if( $pass !== "" )
    	   $query = "UPDATE profesor SET nombre = '$nombre', password = '$pass' WHERE id_docente = '$id'";
        else
            $query = "UPDATE profesor SET nombre = '$nombre' WHERE id_docente = '$id'";
        echo "<br>Query4: " . $query;
    	$result = mysql_query( $query );

    	if( $result ) echo "Aviso: Informacion basica guardada";
    	else echo "Error: al guardar iformacion basica en la BD";

    	if( !$hasData ){
			$query = "INSERT INTO profesordata VALUES('$id', '', '', '', '', '', '', '', '')";
    		$result = mysql_query( $query );    		
    	}

    	$query = "UPDATE profesordata SET " . 
    			 	"email='" . $this->self['email'] . "', " .
    			 	"edad='" . $this->self['edad'] . "', " .
    			 	"profesion='" . $this->self['profesion'] . "', " .
    			 	"certificaciones='" . $this->self['certificaciones'] . "', " .
    			 	"intereses= '" . $this->self['intereses'] . "', " .
    			 	"citas='" . $this->self['citas'] . "', " .
    			 	"detalles= '" . $this->self['detalles'] . "', " .
    			 	"url='" . $this->self['url'] . "' " .
    			 "WHERE id_docente = '$id'";
    	echo "<br>Query6: " . $query;
    	$result = mysql_query( $query );
    	
    	if( $result ) 
    		return 1;
    	else 
    		return 0;
    }
}
?>