<?php  include 'includes/overall/overallheader.php';
require_once 'core/db_configuration/db_config.php';

global $db_server;
$db_server=@mysqli_connect (db_hostname,db_username,db_password,db_database) OR die ('Could not connect to MySQL: '.mysqli_connect_error());
mysqli_query($db_server,"SET NAMES 'utf8'"); 
mysqli_query($db_server,'SET CHARACTER SET utf8');
$sql = "SELECT * FROM `candidates`";
$qry= mysqli_query($db_server,$sql);
?>

<div id="container">
    <div class="well" style="margin-top:20px;">
        <?php 
        $temp=1;
        while ($row=mysqli_fetch_array($qry,MYSQLI_ASSOC)) {
            echo '<p><strong>Applicant Number: </strong>'.$temp.'</p>';
            echo '<p><strong>Name: </strong>'.$row['name'].'</p>';
            echo '<p><strong>Faculty: </strong>'.$row['faculty'].'</p>';
            echo '<p><strong>Department: </strong>'.$row['department'].'</p>';
            echo '<p><strong>Academic Year: </strong>'.$row['academic_year'].'</p>';
            echo '<p><strong>Email: </strong>'.$row['email'].'</p>';
            echo '<p><strong>Mobile: </strong>'.$row['mob_number'].'</p>';
            $sql2="SELECT `option_name` FROM `option` WHERE `option_id` in (SELECT `option_id` FROM `applying_for` WHERE `candidate_id`=".$row['id'].")";
            $qry2=mysqli_query($db_server,$sql2);
            echo '<p><strong>Applying For: </strong></p>';
            echo '<ul>';
            while ($row2=mysqli_fetch_array($qry2,MYSQLI_ASSOC)) {
                echo '<li>'.$row2['option_name'].'</li>';
            }
            echo '</ul>';
            echo '<p><strong>Previous Experience: </strong>'.$row['prev_exp'].'</p>';
            echo '<p><strong>Skills: </strong>'.$row['skills'].'</p>';
            echo '<p><strong>Heard about Allemny From: </strong>';
            if ($row['facebook']==1) {
                echo 'Facebook, ';
            }if ($row['Allemny_Website']==1) {
                echo 'allemny site, ';
            }if ($row['twitter']==1) {
                echo 'Twitter, ';
            }if ($row['friend']==1) {
                echo 'Friend, ';
            }if ($row['other']!='') {
                echo $row['other'].'.';
            }
            echo '</p>';
            echo '<p><strong>Why I joined: </strong>'.$row['join_reason'].'</p>';
            if ($row['suggest']!='') {
            echo '<p><strong>Suggestion: </strong>'.$row['suggest'].'</p>';    
            }
            $temp++;
            echo '<hr style="display: block; height: 1px;border: 0; border-top: 1px solid #ccc; margin: 1em 0; padding: 0;">';
        }
        mysqli_free_result($qry);
        
        ?>
    </div>
</div>
<?php
mysqli_close($db_server);
include 'includes/overall/overallfooter.php';
?>