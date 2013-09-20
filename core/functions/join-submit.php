<?php
DEFINE ('db_hostname', 'localhost');
DEFINE ('db_database','allemny');
DEFINE ('db_username','root');
DEFINE ('db_password','');
// require '/core/db_configuration/db_config.php';

session_start(); 

if (empty($_POST) === false)
{
	//Check the captcha
		if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')
	{
		echo json_encode(array(
			    'status' => 'error',
			    'message'=> 'Error in Captcha' ));
	}
	else
	{
		$db_server=@mysqli_connect (db_hostname,db_username,db_password,db_database) OR die ('Could not connect to MySQL: '.mysqli_connect_error());

		$name = mysqli_real_escape_string($db_server,htmlentities(strip_tags($_POST['name'])));
		$univ = mysqli_real_escape_string($db_server,htmlentities(strip_tags($_POST['univ'])));
		$dept = $_POST['dept'];
		$year = $_POST['year'];
		$email = mysqli_real_escape_string($db_server,htmlentities(strip_tags($_POST['email'])));
		$mobile = mysqli_real_escape_string($db_server,htmlentities(strip_tags($_POST['mobile'])));
		$prev_exp = mysqli_real_escape_string($db_server,htmlentities(strip_tags($_POST['prev_exp'])));
		$skills = mysqli_real_escape_string($db_server,htmlentities(strip_tags($_POST['skills'])));
		$facebook = in_array("facebook",$_POST['how_know'])?true : false ;
		$allemny_website = in_array("allemny_website",$_POST['how_know'])?true : false ;
		$twitter = in_array("twitter",$_POST['how_know'])?true : false ;
		$friend = in_array("friend",$_POST['how_know'])?true : false ;
		$other = mysqli_real_escape_string($db_server,htmlentities(strip_tags($_POST['other'])));
		$join_reason = mysqli_real_escape_string($db_server,htmlentities(strip_tags($_POST['join_reason'])));
		$suggestion = mysqli_real_escape_string($db_server,htmlentities(strip_tags($_POST['suggestion'])));
		
		$qry = mysqli_query($db_server,"INSERT INTO `candidates` (`name`,`faculty`,`department`,`academic_year`,`email`,`mob_number`,`prev_exp`,`skills`,`facebook`,`Allemny_Website`,`twitter`,`friend`,`other`,`join_reason`,`suggest`) VALUES ('$name','$univ','$dept','$year','$email','$mobile','$prev_exp','$skills','$facebook','$allemny_website','$twitter','$friend','$other','$join_reason','$suggestion')");
		$candidate_id = mysqli_insert_id($db_server);			

		// Inser into applying_for table (committees that candidates applied for)
		$committees = $_POST["committee"];
		// integer value of the committee name which is the id number in the database.
		$intVal = 0;
		foreach($committees as $value)
	     {
	     	$intVal = intval($value);
	     	$qry = mysqli_query($db_server,"INSERT INTO `applying_for` (`candidate_id`,`option_id`) VALUES ('$candidate_id' ,'$intVal')");	
		 }
	
		mysqli_close($db_server);
		echo json_encode(array(
	    'status' => 'success' ));		    	
	}

}



?>