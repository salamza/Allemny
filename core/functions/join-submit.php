<?

require '../core/db_configration/db_config.php';

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
		// Ensure user select at least one from apllying for
	if (!isset($_POST['option1']) &&!isset($_POST['option2']) &&!isset($_POST['option3'])&&!isset($_POST['option4']) 
		&&!isset($_POST['option5']) &&!isset($_POST['option6']) &&!isset($_POST['option7'])&&!isset($_POST['option8'])
		&&!isset($_POST['option9'])&&!isset($_POST['option10']))
		{
			echo json_encode(array(
		    'status' => 'error',
		    'message'=> 'You must select at least one position' ));
		}
		else if (!isset($_POST['op1_how_know']) &&!isset($_POST['op2_how_know'])
			&&!isset($_POST['op3_how_know'])&&!isset($_POST['op4_how_know'])&&!isset($_POST['op5_how_know']))
		{
			echo json_encode(array(
		    'status' => 'error',
		    'message'=> 'You must select how did you know about Allemny' ));	
		}
		else
		{
			$name = $_POST['name'];
			$univ = $_POST['univ'];
			$dept =  $_POST['dept'];
			$year = $_POST['year'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$prev_exp = $_POST['prev_exp'];
			$skills = $_POST['skills'];
			$facebook = isset($_POST['op1_how_know'])?true : false ;
			$allemny_website = isset($_POST['op2_how_know'])?true : false ;
			$twitter = isset($_POST['op3_how_know'])?true : false ;
			$friend = isset($_POST['op4_how_know'])?true : false ;
			$other = $_POST['other'];
			$join_reason = $_POST['join_reason'];
			$suggestion = $_POST['suggestion'];


			$db_server = mysql_connect($db_hostname, $db_username, $db_password);
			if (!$db_server) {die("Unable to connect to MySQL: " . mysql_error());}
			mysql_select_db($db_database, $db_server) or die("Unable to select database: ".mysql_error());

			$qry = mysql_query("INSERT INTO candidates(name,faculty,department,academic_year,email,mob_number,prev_exp,skills,facebook,Allemny_Website,twitter,friend,other,join_reason,suggest) VALUES ('$name','$univ','$dept','$year','$email','$mobile','$prev_exp','$skills','$facebook','$allemny_website','$twitter','$friend','$other','$join_reason','$suggestion')");

			$candidate_id = mysql_insert_id();

			if (isset($_POST['option1']))		
				$qry = mysql_query("INSERT INTO applying_for (candidate_id,option_id) VALUES ('$candidate_id' , 1)");	
			if (isset($_POST['option2']))	
				$qry = mysql_query("INSERT INTO applying_for (candidate_id,option_id) VALUES ('$candidate_id' , 2)");
			if (isset($_POST['option3']))	
				$qry = mysql_query("INSERT INTO applying_for (candidate_id,option_id) VALUES ('$candidate_id' , 3)");
			if (isset($_POST['option4']))	
				$qry = mysql_query("INSERT INTO applying_for (candidate_id,option_id) VALUES ('$candidate_id' , 4)");
			if (isset($_POST['option5']))	
				$qry = mysql_query("INSERT INTO applying_for (candidate_id,option_id) VALUES ('$candidate_id' , 5)");
			if (isset($_POST['option6']))	
				$qry = mysql_query("INSERT INTO applying_for (candidate_id,option_id) VALUES ('$candidate_id' , 6)");
			if (isset($_POST['option7']))	
				$qry = mysql_query("INSERT INTO applying_for (candidate_id,option_id) VALUES ('$candidate_id' , 7)");
			if (isset($_POST['option8']))	
				$qry = mysql_query("INSERT INTO applying_for (candidate_id,option_id) VALUES ('$candidate_id' , 8)");
			if (isset($_POST['option9']))	
				$qry = mysql_query("INSERT INTO applying_for (candidate_id,option_id) VALUES ('$candidate_id' , 9)");
			if (isset($_POST['option10']))	
				$qry = mysql_query("INSERT INTO applying_for (candidate_id,option_id) VALUES ('$candidate_id' , 10)");


			mysql_close($db_server);
			echo json_encode(array(
		    'status' => 'success' ));		    
	}
	}

}



?>