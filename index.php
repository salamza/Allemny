<?php 
include 'includes/overall/overallheader.php';?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#myCarousel').carousel({
            interval: 3000
        })
    });
</script>
<div style="width=1000px;height:310px;background-image:url('img/holder.png');">
<div id="container" style="width:780px;margin: 0 auto;padding-top:30px;">
    <div id="myCarousel" class="carousel slide" data-interval="1000">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="active item"><img src="img/welcome2s.png"></div>
            <div class="item"><img src="img/quotes.png"></div>
            <div class="item"><img src="img/welcome3s.png"></div>
        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>
</div>
<div class="row-fluid">
    <div class="well" style="padding-left:92px;">
        <h3 style="padding-left:135px;">Allemny Initiative, A New Learning Platform.</h3>
        <div class="container">        
            <iframe width="815" height="480" src="http://www.youtube.com/embed/Gq6gchplMxQ?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<hr style="padding:0 0 0 0;margin:5px 0 5px 0;">
<div class="row-fluid">
    <div class="span4">
      <form id="vote">
        <fieldset>
            <legend>Which courses you'd like to learn next?</legend>
            <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                <h5>Autocad</h5>
            </label>
            <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option2" >
                <h5>Solidworks</h5>
            </label>

            <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option3" >
                <h5>Basic knowledge for Electronics</h5>
            </label>
            <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option3" >
                <h5>Other...Then Please contact us</h5>
            </label>
            <button type="submit" class="btn btn-primary pull-right" style="margin-top:45px;">Submit</button>
        </fieldset>
    </form>
</div>
<div class="span4">
    <h5>Check coming Lessons.</h5>
    <div id="calendar">
    </div>
</div>
<div class="span4">
<a class="twitter-timeline" href="https://twitter.com/Allemny" data-widget-id="310025711245213697">Tweets by @Allemny</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>
<div class="row-fluid">
                <form id="mailform"  action="subscribe.php" method="post" name="mailform">
                <input type="text" name="submail" id="submail" style="width:900px;"  class="input-small" placeholder="Subscribe for News and other Awesome updates!">
                <button type="submit" style="width:150px;float:right;" class="btn btn-success ">Subscribe</button>
            </form>
</div>

<hr style="padding:0 0 0 0;margin:5px 0 5px 0;">
<div id="sponsers">
<div class="row">
    <div class="span6">
         <p><b>Incubator:</b></p>
        <a target="_blank" href="http://www.facebook.com/sona3handasaalex"><img id="sona3" src="img/sona3_logo.png"></a>
    </div>
    <div class="span6">
          <p><b>Partner:</b></p>     
        <a target="_blank" href="http://www.alexsb.org"><img id="ieee" src="img/ieee.png"></a>
    </div>
</div>
</div>

<?php 
include 'includes/overall/overallfooter.php';?>