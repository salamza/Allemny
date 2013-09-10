<?php 
include 'includes/overall/overallheader.php';

$db_hostname = 'localhost';
$db_database = 'allemny_database';
$db_username = 'allemny_sub';
$db_password = 'bAtKd}TGmFKK';

global $db_server; 
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) {die("Unable to connect to MySQL: " . mysql_error());}
mysql_select_db($db_database, $db_server) or die("Unable to select database: ".mysql_error());
if(isset($_GET['id']) &&isset($_GET['vid'])){

$playlistnum = $_GET['id'];
$vidnum=$_GET['vid'];
$sql = "SELECT * FROM `playlist` WHERE `id` = ".$playlistnum." LIMIT 0, 30 ";
$rslt= mysql_query($sql,$db_server);
if(mysql_numrows($rslt)!= 1){
    die("Server Error" .mysql_error());
}
$title=mysql_result($rslt,0,"title");
}
?>



<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3">
			<!--Sidebar content-->
	
              <ul class="nav nav-list">
                <li class="nav-header"><?php echo "$title";?></li>
                <?php
                $sql = "SELECT * FROM `videos` WHERE `playlist_id` =".$playlistnum." ORDER BY `num` ASC LIMIT 0 , 30";
                $rslt= mysql_query($sql);
                $num=mysql_numrows($rslt);
                $i=0;
                while ($i < $num) {
                    $k=$i+1;
                    $lesson_title= mysql_result($rslt,$i,"title");

                    echo "<li><a href=\""."player.php?id=".$playlistnum."&vid=".$k."\">".$lesson_title."</a></li>";
                    $i++;
                }
                ?>
              </ul>
		</div>
		<div class="span9" style="border-left:solid 2px #eee;">
			<!--Body content-->
			<div class="row-fluid">
				<div class="row-fluid">
                    <?php
                    $sql2 = "SELECT `yt_id` FROM `videos` WHERE `num` = ".$vidnum." AND `playlist_id` = ".$playlistnum." LIMIT 0, 30 ";
                    $rslt2= mysql_query($sql2)or die("Error".mysql_error());;
                    $lesson_key=mysql_result($rslt2,0,"yt_id");
                    echo '<iframe width="730" height="450" src="http://www.youtube.com/embed/'.$lesson_key.'?rel=0" frameborder="0" allowfullscreen></iframe>';
                    ?>

            </div>
			</div>
            


            <div class="row-fluid">
              <div id="disqus_thread"></div>
              <script type="text/javascript">
              /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'allemny'; // required: replace example with your forum shortname
        var disqus_identifier = '<?php echo $lesson_key ?>';
        var disqus_title = '<?php  echo $title ?>';
        //var disqus_url = '';
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
</div>

		</div>
	</div>
</div>
<?php mysql_close($db_server);?>
<?php 
include 'includes/overall/overallfooter.php';?>