<?php
DEFINE ('db_hostname', 'localhost');
DEFINE ('db_database','allemny');
DEFINE ('db_username','root');
DEFINE ('db_password','');

global $db_server;
$db_server=@mysqli_connect (db_hostname,db_username,db_password,db_database) OR die ('Could not connect to MySQL: '.mysqli_connect_error());

if (isset($_POST['submail'])){
    $email=$_POST['submail'];
    if (empty($email)) {
    }
    else {
        $tbl_name="newsletters";
        $email = mysqli_real_escape_string($db_server,$email); // make sure it OK
        $sql = "SELECT * FROM `newsletters` WHERE email = '{$email}' LIMIT 1"; // select all subsribers that has the email and only return (if there is) one
        $qry= mysqli_query($db_server,$sql);// run the query
        if( mysqli_num_rows($qry) != 0){ // if that user was found they are not new so return false
            return false;
            mysqli_free_result($qry);
        }
        else
        { 
           mysqli_free_result($qry);
           $sql = 'insert into '.$tbl_name.'(email) values("' . $email . '")';    
           $qry= mysqli_query($db_server,$sql);
            if ($qry){
                echo "success";
            }
            else
            {
                echo "INSERT failed";
            }
        }
    }
}

mysql_close($db_server);
?>