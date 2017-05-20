<?php

$result = ldap_search($ldap_con,$ldap_dn, "(cn=*)") or die ("Error in search query: ".ldap_error($ldapconn));
$data = ldap_get_entries($ldap_con, $result);

// SHOW ALL DATA
/*echo '<h1>Dump all data</h1><pre>';
print_r($data);
echo '</pre>';*/

echo '<h1>Datos del usuario:</h1>';
for ($i=0; $i<$data["count"]; $i++) {
	//echo "dn is: ". $data[$i]["dn"] ."<br />";	
	echo "Uid: ". $data[$i]["uid"][0] ."<br />";
	echo "cn: ". $data[$i]["cn"][0] ."<br />";
	echo "sn: ". $data[$i]["sn"][0] ."<br />";
	echo "Gidnumber: ". $data[$i]["gidnumber"][0] ."<br />";
	echo "Uidnumber: ". $data[$i]["uidnumber"][0] ."<br />";
	echo "Home: ". $data[$i]["homedirectory"][0] ."<br />";
	echo "Shell: ". $data[$i]["loginshell"][0] ."<br />";
	echo "Password: ". $data[$i]["userpassword"][0] ."<br />";
	
	/*if(isset($data[$i]["mail"][0])) {
		echo "Email: ". $data[$i]["mail"][0] ."<br /><br />";
	} else {
		echo "Email: None<br /><br />";
	}*/
}