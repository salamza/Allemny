<?php 
include 'includes/overall/overallheader.php';?>

<div class="container">
	<div class="well">
		<form id="contactus" class="form-horizontal" method="post" action="#">
			<legend>Contact Us</legend>
			<div class="control-group">
				<label class="control-label">Full Name</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-user"></i></span>
						<input type="text" class="input-xlarge" id="name" name="name" placeholder="Name" required>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Email</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-envelope"></i></span>
						<input type="email" class="input-xlarge" id="email" name="email" placeholder="Email" required>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Subject</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-pencil"></i></span>
						<input type="text" class="input-xlarge" id="subject" name="subject" placeholder="Subject" required>
					</div>
				</div>
			</div>
			<div class="control-group">  
                <label class="control-label" for="input3">Message</label>  
                <div class="controls">  
                    <textarea name="contact_message" id="input3" rows="8" class="span5" placeholder="Your Message" required></textarea>  
                </div>  
            </div>
            <div class="form-actions"> 
                <input type="hidden" name="send" value="contact">
                <button type="submit" class="btn btn-success">Send</button>  
            </div>
			
		</form>
	</div>
</div>


<?php 
include 'includes/overall/overallfooter.php';?>