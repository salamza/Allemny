<?php
$db_hostname = 'localhost';
$db_database = 'allemny_database';
$db_username = 'allemny_sub';
$db_password = 'bAtKd}TGmFKK';
global $db_server; 
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) {die("Unable to connect to MySQL: " . mysql_error());}
mysql_select_db($db_database, $db_server) or die("Unable to select database: ".mysql_error());
if (isset($_POST['submail'])){
	$email= $_POST['submail'];
	$tbl_name="newsletters";
    $email = mysql_real_escape_string($email); // make sure it OK
    $sql = "SELECT * FROM `newsletters` WHERE email = '{$email}' LIMIT 1"; // select all subsribers that has the email and only return (if there is) one
    $qry = mysql_query($sql,$db_server); // run the query
    if( mysql_num_rows($qry) != 0){ // if that user was found they are not new so return false
        return false;
    }else{ 
        $sql = 'insert into '.$tbl_name.'(email) values("' . $email . '")';      
        if (!mysql_query($sql, $db_server)){
            echo "INSERT failed: $sql<br />" .mysql_error() . "<br /><br />";
        }
        else{
            echo "success";
            }
    }
}
mysql_close($db_server);
?>