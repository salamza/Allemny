<?php
include 'includes/overall/overallheader.php';
require_once 'core/db_configuration/db_config.php';
require_once 'core/paginator.class.2.php';
?>
<style type="text/css">
.paginate {
	font-family: Arial, Helvetica, sans-serif;
	font-size: .7em;
}

a.paginate {
	border: 1px solid #000080;
	padding: 2px 6px 2px 6px;
	text-decoration: none;
	color: #000080;
}


a.paginate:hover {
	background-color: #000080;
	color: #FFF;
	text-decoration: underline;
}

a.current {
	border: 1px solid #000080;
	font: bold .7em Arial,Helvetica,sans-serif;
	padding: 2px 6px 2px 6px;
	cursor: default;
	background:#000080;
	color: #FFF;
	text-decoration: none;
}

span.inactive {
	border: 1px solid #999;
	font-family: Arial, Helvetica, sans-serif;
	font-size: .7em;
	padding: 2px 6px 2px 6px;
	color: #999;
	cursor: default;
}

table {
	margin: 8px;
}

th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: .7em;
	background: #666;
	color: #FFF;
	padding: 2px 6px;
	border-collapse: separate;
	border: 1px solid #000;
}

td {
	font-family: Arial, Helvetica, sans-serif;
	font-size: .7em;
	border: 1px solid #DDD;
}
</style>
<script>
function hilite(elem)
{
	elem.style.background = '#FFC';
}

function lowlite(elem)
{
	elem.style.background = '';
}
</script>
<div style="width:1500px;">
<?php
$db_server=@mysqli_connect (db_hostname,db_username,db_password,db_database) OR die ('Could not connect to MySQL: '.mysqli_connect_error());
mysqli_query($db_server,"SET NAMES 'utf8'"); 
mysqli_query($db_server,'SET CHARACTER SET utf8');
$countSql="SELECT COUNT( * ) FROM `candidates`";
$countQry= mysqli_query($db_server,$countSql);
$rows=mysqli_fetch_row($countQry);

echo "<p><strong>Current Number of Applicants is:</strong> ".$rows[0].".</p>";
$pages = new Paginator;
$pages->items_total = $rows[0];
$pages->mid_range = 7; // Number of pages to display. Must be odd and > 3
$pages->paginate();
echo $pages->display_pages();
//echo "<span class=\"\">".$pages->display_jump_menu().$pages->display_items_per_page()."</span>";
$Sql= "SELECT * FROM `candidates` $pages->limit";
$Qry= mysqli_query($db_server,$Sql);
if ($Qry) {
	$temp=1;
	echo "<table >";
	echo "<tr><th>ID</th><th>Name</th><th>Faculty</th><th>Department</th><th>Academic Year</th><th>Email</th><th>Mobile</th><th>Committees</th><th>Experience</th><th>Skills</th><th>Heard From</th><th>Reason</th><th>Suggestion</th></tr>";
	while($row = mysqli_fetch_row($Qry))
	{
		$String1="<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td>";
		$Sql2="SELECT `option_name` FROM `option` WHERE `option_id` in (SELECT `option_id` FROM `applying_for` WHERE `candidate_id`=".$row[0].")";
        $Qry2=mysqli_query($db_server,$Sql2);
		$committees="";
		while ($row2=mysqli_fetch_array($Qry2,MYSQLI_ASSOC)) {
			$committees =$committees.$row2['option_name'].",";
         }
         $heardFrom="";
         if ($row[9]==1) {
         	$heardFrom.='Facebook, ';
            }if ($row[10]==1) {
                $heardFrom.='Allemny WebSite, ';
            }if ($row[11]==1) {
                $heardFrom.='Twitter, ';
            }if ($row[12]==1) {
                $heardFrom.='Friend, ';
            }if ($row[13]!='') {
                $heardFrom=$heardFrom.$row['13'].'.';
            }
        $String2="<td>".$committees."</td><td>$row[7]</td><td>$row[8]</td><td>".$heardFrom."</td><td>$row[14]</td><td>$row[15]</td></tr>\n";
		echo $String1.$String2;
		$temp++;

	}
	echo "</table>";
	echo $pages->display_pages();
	echo "<p class=\"paginate\">Page: $pages->current_page of $pages->num_pages</p>\n";
	mysqli_free_result($Qry);
	}

?>
</div>
<?php
mysqli_close($db_server);
include 'includes/overall/overallfooter.php';
?>
