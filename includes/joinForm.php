<div class="container">
	<div >
		<form id="joinus" class="form-horizontal" method="post" action="core/functions/join-submit.php">
			<legend>Register</legend>
			
			<div class="control-group">
				<label class="control-label">Full Name</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="span4" id="name" name="name" placeholder="" required>
					</div>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">University/ Faculty</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="span4" id="univ" name="univ" placeholder="Ex: Alex University, Faculty of Engineering" required>
					</div>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">Department</label>
				<div class="controls">
					<div class="input-prepend">
						<select class="span4" name="dept">
							<option value = "Preparatory"> Preparatory </option>
							<option value = "Electrical"> Electrical </option>
							<option value = "Mechanical"> Mechanical </option>
							<option value = "Production"> Production </option>
							<option value = "Chemical"> Chemical </option>
							<option value = "Computer"> Computer </option>
							<option value = "Civil"> Civil </option>
							<option value = "Nuclear"> Nuclear </option>
							<option value = "Architecure"> Architecure </option>
							<option value = "Textile"> Textile </option>
							<option value = "Naval"> Naval </option>
							<option value = "Computer Communication"> Computer Communication </option>
							<option value = "Pertrochemicals"> Pertrochemicals</option>
							<option value = "Electromechanics">Electromechanics </option>
							<option value = "Construction"> Construction </option>
							<option value = "Other"> Other </option>
						</select>
					</div>
				</div>
			</div>			
			
			<div class="control-group">
				<label class="control-label">Academic Year</label>
				<div class="controls">
					<div class="input-prepend">
						<select name="year" class = "span4">
							<option value="Preparatory">Preparatory</option>
							<option value="First">First</option>
							<option value="Second">Second</option>
							<option value="Third">Third</option>
							<option value="Fourth">Fourth</option>
						</select>
					</div>
				</div>
			</div>	
			
			<div class="control-group">
				<label class="control-label">Email</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="email" class="span4" id="email" name="email" placeholder="" required>
					</div>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">Mobile Number</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="number" class="span4" id="mobile" name="mobile" required minlength = "10" data-validation-number-message = "Please Enter your mobile number">
					</div>
				</div>
			</div>
			<div class="control-group">
                <label class="control-label">Applying for</label>
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" name="committee[]" value="1" data-validation-minchecked-minchecked="1" data-validation-minchecked-message="Please Select a Committee" 
                        data-validation-maxchecked-maxchecked="2" data-validation-maxchecked-message="You can't Apply for more than 2 Committes">
                        PR and FR committee.
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="committee[]" value="2">
                        Marketing Committee.
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="committee[]" value="3">
                        R&D Committee.
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="committee[]" value="4">
                        Graphics Committee, "Video Editing".
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="committee[]" value="5">
                        Graphics Committee, "Design".
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="committee[]" value="6">
                        Graphics Committee, "Videography and Photography".
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="committee[]" value="7">
                        HR Committee.
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="committee[]" value="8">
                        Academic Committee.
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="committee[]" value="9">
                        Web Committee, "Developers and Designers".
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="committee[]" value="10">
                        Web Committee, "Editors".
                    </label>
                    <p class="help-block"></p>
                </div>
            </div>
				
			
			<div class="control-group">  
                <label class="control-label" for="prev_exp" >State any volunteering experience?</label>
                <div class="controls">  
                    <textarea name="prev_exp" id="prev_exp" rows="8" class="span5" placeholder="If you have no previous experience, can you tell us why do you want to join as a volunteer?" required></textarea>  
                </div>  
            </div>
			
			<div class="control-group">  
                <label class="control-label" for="skills">What is your skills? (Technical & soft skills) </label>                
                <div class="controls">  
                    <textarea name="skills" id="skills" rows="8" class="span5" placeholder="" required></textarea>  
                </div>  
            </div>	      
 

			<div class="control-group">
				<label class="control-label" for="prev_exp">How did you know about Allemny? </label>  
				    <div class="controls">
				        <label class="checkbox">
				            <input type="checkbox" name="how_know[]" value = "facebook" data-validation-minchecked-minchecked="1" data-validation-minchecked-message="Please Select How did you know about Allemny"> 
				            Facebook.
				        </label>
				        <label class="checkbox">
				            <input type="checkbox" name="how_know[]" value = "allemny_website"> Allemny Website.
				        </label>				        
						<label class="checkbox">
				            <input type="checkbox" name="how_know[]" value = "twitter"> Twitter.
				        </label>
				        <label class="checkbox">
				            <input type="checkbox" name="how_know[]" value = "friend"> Friend.
				        </label>
				        <label class="checkbox">
				            <input type="checkbox" name="how_know[]" value = "other_check"> Other.
				            <input type="checkbox" id="otherCheckBox" name="how_know[]" value = "other" onchange="changetextbox();"> Other.
				        </label>				        
				    </div>
				</div>

				<div class="control-group">
				<label class="control-label">If other mention how</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input-xlarge" id="other" name="other" placeholder="" disabled>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				function changetextbox(){
					var k =document.getElementById("otherCheckBox").checked
					document.getElementById('other').disabled=!k;
					document.getElementById('other').required =k;
				}
			</script>
			<div class="control-group">  
                <label class="control-label" for="join_reason">Why would you join Allemny Volunteers?</label>
                <div class="controls">  
                    <textarea name="join_reason" id="join_reason" rows="8" class="span5" placeholder="" required></textarea>  
                </div>  
            </div>
			
			<div class="control-group">  
                <label class="control-label" for="suggestion">If you've any suggestions, Please Let us Know</label>  
                <div class="controls">  
                    <textarea name="suggestion" id="suggestion" rows="8" class="span5" placeholder="" ></textarea>  
                </div>  
            </div>

            <div class="control-group">
            	<img class = "controls" src="captcha/captcha.php">Write The Numbers<br>
            	<input class = "controls" type="text" name="vercode" required/> 
            </div>

            <div class="form-actions"> 
                <input type="hidden" name="send" value="contact">
                <button type="submit" class="btn btn-success">Send</button>  
            </div>
		</form>
	</div>
</div>