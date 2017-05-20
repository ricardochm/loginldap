<?php

error_reporting(E_ALL);

define(LDAP_OPT_DIAGNOSTIC_MESSAGE, 0x0032);

// ejemplo de autenticación
//$ldaprdn  = 'uname';     // ldap rdn or dn
$ldaprdn  = $_POST['usuario'];     // ldap rdn or dn

//$ldappass = 'password';  // associated password
$ldappass = $_POST['contrasena'];  // associated password

$dc1 = "daw2";
$dc2 = "net";


$ldap_dn = "cn=$ldaprdn,dc=$dc1,dc=$dc2";
$ldap_password = $ldappass;

$ldap_con = ldap_connect("localhost");

session_start();

$_SESSION["user"]=$ldaprdn;
$_SESSION["pass"]=$ldappass;
$_SESSION["ldapcon"]=$ldap_con;
$_SESSION["ldapdn"]=$ldap_dn;

ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

if(ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {
	
	include 'home.php';
	
} else {
	
	echo "¡Combinación usuario/contraseña incorrectos!";
	include 'index.html';
	
}

?>