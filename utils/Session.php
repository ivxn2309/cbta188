<?php
	class Session{

		public function __construct(){
		}

		public function start(){
			session_start();
		}

		public function getIP(){
			return $_SERVER['REMOTE_ADDR'];	
		}

		public function getID(){
			return session_id();	
		}

		public function setID($nombre){
			session_id($nombre);
		}

		public function get($nombre){
			return $_SESSION[$nombre];	
		}

		public function contains($nombre){
			return isset($_SESSION[$nombre]);	
		}

		public function set($nombre, $valor){
			$_SESSION[$nombre] = $valor;	
		}

		public function delete($nombre){
			unset ($_SESSION[$nombre] ) ;
		}

		public function close() {
			$_SESSION = array();
			session_destroy();
		}

	}	
?>