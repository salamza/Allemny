<?php 
include 'includes/overall/overallheader.php';
require_once 'core/db_configuration/db_config.php';

global $db_server;
$db_server=@mysqli_connect (db_hostname,db_username,db_password,db_database) OR die ('Could not connect to MySQL: '.mysqli_connect_error());


if(isset($_GET['id']) &&isset($_GET['vid'])){
$playlistnum = mysqli_real_escape_string($db_server, $_GET['id']);
$vidnum = mysqli_real_escape_string($db_server, $_GET['vid']);
$sql = "SELECT * FROM `playlist` WHERE `id` = ".$playlistnum." LIMIT 0, 30 ";

$rslt= mysqli_query($db_server,$sql);

if(mysqli_num_rows($rslt)!= 1){ 
    die("Server Error" .mysql_error());
}
$row=mysqli_fetch_array($rslt,  MYSQLI_ASSOC);
// $title=mysql_result($rslt,0,"title");
$title=$row['title'];
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
                $rslt= mysqli_query($db_server,$sql);
                $num=mysqli_num_rows($rslt);
                $k=1;
                while($row=mysqli_fetch_array($rslt,MYSQLI_ASSOC)){
                    $lesson_title = $row['title'];
                    echo "<li><a href=\""."player?id=".$playlistnum."&vid=".$k."\">".$lesson_title."</a></li>";
                    $k++;
                }
                ?>
              </ul>
		</div>
		<div class="span9" style="border-left:solid 2px #eee;">
			<!--Body content-->
			<div class="row-fluid">
				<div class="row-fluid">
                    <?php
                    $sql2 = "SELECT `yt_id` FROM `videos` WHERE `num` = ".$vidnum." AND `playlist_id` = ".$playlistnum." LIMIT 0, 1 ";
                    $rslt2= mysqli_query($db_server,$sql2);
                    $row2=mysqli_fetch_array($rslt2,MYSQLI_ASSOC);
                    $lesson_key=$row2['yt_id'];
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
<?php mysqli_close($db_server);?>
<?php 
include 'includes/overall/overallfooter.php';?>