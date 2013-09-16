<?php  include 'includes/overall/overallheader.php';?>

<div id="container">
    <div class="well" style="margin-top:20px;">
        <div class="row-fluid" >
            <h4 style="padding-left:100px;font-family:sans-serif;">Subscribe to Allemny Newsletter and receive news about our new courses, videos and more.</h4>
        </div>
        <div class="row-fluid">
            <form id="mailform2"  action="core/functions/subscription-submit.php" method="post" name="mailform2">
                <div style="padding-left:135px;height:70px;">
                    <input type="text" name="submail" id="submail" style="width:700px;"  class="input-small" required >
                    <p class="errorMsg" style="font-family: Arial, Helvetica, sans-serif;font-size: 13px;color: #cc0000;
                    width: 250px;">Please Enter a Valid Email Address.</p>
                </div>
                <div style="padding-left:400px;">
                    <button type="submit" style="width:200px;" class="btn btn-success btn-large">Subscribe</button>
                </div>
            </form>
        </div>
 
</div>

<?php  include 'includes/overall/overallfooter.php';?>