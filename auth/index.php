<?php

require_once "./classes/auth.class.php";

$permission = Auth::check_permissions($login, $password);

if($permission) {
	;;
} else { 
	;;
}