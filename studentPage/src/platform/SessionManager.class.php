<?php

class SessionManager {
	public static function init() {
		if (!isset($_SESSION)){
			session_start();
		}
	}
	private static function checkSession() {
		if (!isset($_SESSION)){
			echo "<font color='red'>Session is not initialized...</font>";
		}
	}
	public static function setSessionAttribute($session_name,$object) {
		self::checkSession();
		$_SESSION[$session_name] = serialize($object);
	}
	public static function getSessionAttribute($session_name) {
		self::checkSession();
		return unserialize($_SESSION[$session_name]);
	}

	public static function destroySession($session_name){
		self::checkSession();
		if(isset($_SESSION[$session_name])){
			$_SESSION[$session_name]=NULL;
			unset($_SESSION[$session_name]);
			echo $_SESSION[$session_name];
		}
	}
}
?>