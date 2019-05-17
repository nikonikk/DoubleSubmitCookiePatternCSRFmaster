<?php

class token {
   
	public static function checkToken($token,$cookiecsrf){
			if($cookiecsrf == $token) {
				return true;
			}
	}
}
?>