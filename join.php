<?php 
include 'includes/overall/overallheader.php';?>


<div class="container">
	<div class="well">
		<h2>Join The Team.</h2>
		<p>Allemny is non-profitable project that was created in 2011 by Life Makers, Engineering College - Alexandria University. Allemny mainly aims to encourage self-Learning and to keep teaching techniques up to date by using new education tactics to cope with the modern technologies. We are creating short videos that explain engineering topics and software in an easy way, so that everybody can understand our data.<br>It is our belief that science and education have always been the principal foundation of civilization and progression of nations. It has become a necessity to enhance the outdated education tactics. We provide education for those who need it whenever they want. We are creating online Videos that illustrate scientific topics which help students who are interested in any of these topics to start searching and reading about them.</p><br>
		<p><B>Notice that you have the choice for registering in:</B><br></p>
		<ol>
			<li>The PR and FR committee.</li>
			<li>Marketing Committee.</li>
			<li>R&D Committee.</li>
			<li>Graphics Committee: Containing two Sub-teams "Video Editing team" and "Design team".</li>
			<li>Web Committee Containing web developers and designers.</li>
			<li>HR Committee.</li>
		</ol>
			<p>You can find the job description for each committee <a href="http://goo.gl/4vD2N">Here</a> <br>
			<br></p>
			<h3 style="padding-left:200px;">Recruiting Will Start Soon, Stay Tuned...</h3>
		</div>
	</div>
	
	<div class="container">
	<div >
		<form id="contactus" class="form-horizontal" method="post" action="#">
			<legend>Register</legend>
			
			<div class="control-group">
				<label class="control-label">Full Name</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input-xlarge" id="name" name="name" placeholder="" required>
					</div>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">University/ Faculty</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input-xlarge" id="univ" name="univ" placeholder="Ex: Alex University, Faculty of Engineering" required>
					</div>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">Department</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input-xlarge" id="dept" name="dept" placeholder="" required>
					</div>
				</div>
			</div>			
			
			<div class="control-group">
				<label class="control-label">Academic Year</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input-xlarge" id="year" name="year" placeholder="" required>
					</div>
				</div>
			</div>	
			
			<div class="control-group">
				<label class="control-label">Email</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="email" class="input-xlarge" id="email" name="email" placeholder="" required>
					</div>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">Mobile Number</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="email" class="input-xlarge" id="mobile" name="mobile" placeholder="" required>
					</div>
				</div>
			</div>
			
<div class="control-group">
<label class="control-label" for="prev_exp">Applying for</label>  
    <div class="controls ">
        <label class="checkbox">
            <input type="checkbox" value="option1" id="inlineCheckbox1"> PR and FR committee.
        </label>
        <label class="checkbox">
            <input type="checkbox" value="option2" id="inlineCheckbox2"> Marketing Committee.
        </label>
        <label class="checkbox">
            <input type="checkbox" value="option3" id="inlineCheckbox3"> R&D Committee.
        </label>
        <label class="checkbox">
            <input type="checkbox" value="option3" id="inlineCheckbox3"> Graphics Committee, Video Editing team.
        </label>
		<label class="checkbox">
            <input type="checkbox" value="option3" id="inlineCheckbox3"> Graphics Committee, Design team.
        </label>
		<label class="checkbox">
            <input type="checkbox" value="option2" id="inlineCheckbox2"> Web Committee
        </label>
		<label class="checkbox">
            <input type="checkbox" value="option2" id="inlineCheckbox2"> HR Committee.
        </label>
    </div>
</div>
			
			
			<div class="control-group">  
                <label class="control-label" for="prev_exp" >State your previous volunteering experience ?</label>
                <div class="controls">  
                    <textarea name="prev_exp" id="prev_exp" rows="8" class="span5" placeholder="If you have no previous experience, can you tell us why do you want to join as a volunteer?" required></textarea>  
                </div>  
            </div>
			
			<div class="control-group">  
                <label class="control-label" for="info_test">What do you know about Allemny?</label>  
                <div class="controls">  
                    <textarea name="info_test" id="info_test" rows="8" class="span5" placeholder="" required></textarea>  
                </div>  
            </div>
			
			<div class="control-group">  
                <label class="control-label" for="join_reason">Why do you want to be a volunteer at Allemny ?</label>  
                <div class="controls">  
                    <textarea name="join_reason" id="join_reason" rows="8" class="span5" placeholder="" required></textarea>  
                </div>  
            </div>
			
			<div class="control-group">  
                <label class="control-label" for="suggestion">If you have any suggestions, you are welcome</label>  
                <div class="controls">  
                    <textarea name="suggestion" id="suggestion" rows="8" class="span5" placeholder="" ></textarea>  
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