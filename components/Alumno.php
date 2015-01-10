<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../utils/DBSettings.php";
class Alumno {
	private $self = array();

	public function __construct( /* string */ $id ) {
		$this->self['id'] = $id;
		$this->checkExistence( $id );
		if( $this->self['hasData'] ) {
			$data = $this->getData( $id );
			$this->self['nombre'] = $data[1];
			$this->self['apaterno'] = $data[2];
			$this->self['amaterno'] = $data[3];
			$this->self['grupo'] = $data[4];
		}

		if( $this->self['hasEntity'] ) {
			$entity = $this->getEntity( $id );
			$this->self['email'] = $entity[1];
			$this->self['curp'] = $entity[2];
			$this->self['edad'] = $entity[3];
		}
	}

	private function checkExistence( /* string */ $id ) {
		$this->self['hasData'] = true;
		$this->self['hasEntity'] = true;

		if( $id != 0 ) {
			$query = "SELECT no_control FROM alumnodata WHERE no_control='$id'";
			$result = mysql_query($query);
			if( mysql_num_rows($result) == 0 ) {
				$this->self['hasData'] = false;
			}

			$query = "SELECT no_control FROM alumnoentity WHERE no_control='$id'";
			$result = mysql_query($query);
			if( mysql_num_rows($result) == 0 ) {
				$this->self['hasEntity'] = false;
			}
		}
	}

	public function getData( /* string */ $id ) {
		$query = "SELECT * FROM alumnodata WHERE no_control='$id'";
		$result = mysql_query($query);
		$row = mysql_fetch_row($result);
		return $row;
	}

	public function getEntity( /* string */ $id ) {
		$query = "SELECT * FROM alumnoentity WHERE no_control='$id'";
		$result = mysql_query($query);
		$row = mysql_fetch_row($result);
		return $row;
	}

	public function __get( /*string*/ $name = null ) {
        return $this->self[$name];
    }

    public function set( /*string*/ $name, /*string*/ $value ){
    	$this->self[$name] = $value;
    }

    public function attr( /*array*/ $alumno ){
    	$this->set("id", $this->self['id']);
    	$this->set("email", $alumno["email"]);
    	$this->set("curp", $alumno["curp"]);
    	$this->set("edad", $alumno["edad"]);
    }

    public function setData( /*array*/ $alumno ) {    	
    	$this->set("nombre", $alumno["nombre"]);
    	$this->set("apaterno", $alumno["apaterno"]);
    	$this->set("amaterno", $alumno["amaterno"]);
    	$this->set("grupo", $alumno["grupo"]);
    }

    public function save() {
    	if( $this->self['hasData'] ){
    		return $this->saveData() && $this->saveEntity();
    	}
    	else{
    		echo "No hay un numero de control asociado";
    	}
    }

    public function saveData(){
    	$id = $this->self['id'];

    	$query = "UPDATE alumnodata SET " . 
    			 	"nombre='" . $this->self['nombre'] . "', " .
    			 	"apaterno='" . $this->self['apaterno'] . "', " .
    			 	"amaterno='" . $this->self['amaterno'] . "', " .
    			 	"grupo='" . $this->self['grupo'] . "' " .
    			 "WHERE no_control = '$id'";

    	$result = mysql_query( $query );
    	
    	if( $result ) {
    		echo "Datos guardados";
    		return 1;
    	}
    	else {
    		echo "Datos sin guardar";
    		return 0;
    	}
    }

    public function saveEntity(){
    	$id = $this->self['id'];
    	$email = $this->self['email'];
    	$curp = $this->self['curp'];
    	$edad = $this->self['edad'];
    	$result = true;

    	if( !$this->self['hasEntity'] ) {
    		$query = "INSERT INTO alumnoentity VALUES ('$id', '$email', '$curp', '$edad')";
    		$result = mysql_query($query);
    	}

    	if($result){
    		$query = "UPDATE alumnoentity SET " . 
	    			 	"email='" . $email . "', " .
	    			 	"curp='" . $curp . "', " .
	    			 	"edad='" . $edad . "' " .
	    			 "WHERE no_control = '$id'";

	    	$result = mysql_query( $query );
	    	
	    	if( $result ){
	    		echo "Entidad guardada";
	    		return 1;	
	    	} 
	    	else {
	    		echo "Entidad sin guardar";
	    		return 0;
	    	}
    	}
    	else {
    		echo "Entidad sin insertar";
    		return 0;
    	}    	
    }
}