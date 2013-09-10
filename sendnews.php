<?php 
include 'includes/overall/overallheader.php';

$db_hostname = 'localhost';
$db_database = 'allemny';
$db_username = 'root';
$db_password = '';
global $db_server; 
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) {die("Unable to connect to MySQL: " . mysql_error());}
mysql_select_db($db_database, $db_server) or die("Unable to select database: ".mysql_error());

$sql = "SELECT * FROM `newletters`";
$numRows = mysql_num_rows($sql);
$mail_body = '';
while($row = mysql_fetch_array($sql)){
    $email = $row["email"];
    $mail_body = '<html>
<body style="background-color:#CCC; color:#000; font-family: Arial, Helvetica, sans-serif; line-height:1.8em;">
<h3><a href="http://www.developphp.com"><img src="http://www.yoursite.com/images/logo.png" alt="DevelopPHP" width="216" height="36" border="0"></a> Newsletter
</h3>
<p>Hello Everyone,</p>
<p>You can make this out to be just like most any web page or design format you require using HTML and CSS.</p>
<p>~Adam @ DevelopPHP</p>
<hr>
<p>To opt out of receiving this newsletter,  <a href="http://www.developphp.com/Tests/newsletter/optout.php?e=' . $email . '">click here</a> and we will remove you from the listing immediately.</p>
</body>
</html>';
    $subject = "Allemny Site beta Launch";
    $headers  = "From:info@allemny.org\r\n";
    $headers .= "Content-type: text/html\r\n";
    $to = "$email";
    $mail_result = mail($to, $subject, $mail_body, $headers);
}
?>



<?php mysql_close($db_server);?>
<?php 
include 'includes/overall/overallfooter.php';?>