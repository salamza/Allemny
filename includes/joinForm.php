<div class="container">
	<div >
		<form id="joinus" class="form-horizontal" method="post" action="core/functions/join-submit.php">
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
						<select class="input-xlarge" name="dept">
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
						</select>
					</div>
				</div>
			</div>			
			
			<div class="control-group">
				<label class="control-label">Academic Year</label>
				<div class="controls">
					<div class="input-prepend">
						<select name="year" class = "input-xlarge">
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
						<input type="email" class="input-xlarge" id="email" name="email" placeholder="" required>
					</div>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">Mobile Number</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input-xlarge" id="mobile" name="mobile" placeholder="" required>
					</div>
				</div>
			</div>
			
				<div class="control-group">
				<label class="control-label" for="prev_exp">Applying for</label>  
				    <div class="controls ">
				        <label class="checkbox">
				            <input type="checkbox" name="option1" id="inlineCheckbox1"> PR and FR committee.
				        </label>
				        <label class="checkbox">
				            <input type="checkbox" name="option2" id="inlineCheckbox2"> Marketing Committee.
				        </label>
				        <label class="checkbox">
				            <input type="checkbox" name="option3" id="inlineCheckbox3"> R&D Committee.
				        </label>
				        <label class="checkbox">
				            <input type="checkbox" name="option4" id="inlineCheckbox3"> Graphics Committee, "Video Editing".
				        </label>
						<label class="checkbox">
				            <input type="checkbox" name="option5" id="inlineCheckbox3"> Graphics Committee, "Design".
				        </label>
						<label class="checkbox">
				            <input type="checkbox" name="option6" id="inlineCheckbox2"> Graphics Committee, "Videography and Photography".
				        </label>
						<label class="checkbox">
				            <input type="checkbox" name="option7" id="inlineCheckbox2"> HR Committee.
				        </label>
				        <label class="checkbox">
				            <input type="checkbox" name="option8" id="inlineCheckbox2"> Academic Committee.
				        </label>
				        <label class="checkbox">
				            <input type="checkbox" name="option9" id="inlineCheckbox2"> Web Committee, "Developers and Designers".
				        </label>
				        <label class="checkbox">
				            <input type="checkbox" name="option10" id="inlineCheckbox2"> Web Committee, "Editors".
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
                <label class="control-label" for="skills">What is your skills? (Technical and soft skills) </label>                
                <div class="controls">  
                    <textarea name="skills" id="skills" rows="8" class="span5" placeholder="" required></textarea>  
                </div>  
            </div>
			
			<div class="control-group">
				<label class="control-label" for="prev_exp">How did you know about Allemny? </label>  
				    <div class="controls ">
				        <label class="checkbox">
				            <input type="checkbox" name="op1_how_know" id="inlineCheckbox1"> Facebook.
				        </label>
				        <label class="checkbox">
				            <input type="checkbox" name="op2_how_know" id="inlineCheckbox2"> Allemny Website.
				        </label>				        
						<label class="checkbox">
				            <input type="checkbox" name="op3_how_know" id="inlineCheckbox2"> Twitter.
				        </label>
				        <label class="checkbox">
				            <input type="checkbox" name="op4_how_know" id="inlineCheckbox2"> Friend.
				        </label>
				        <label class="checkbox">
				            <input type="checkbox" name="op5_how_know" id="inlineCheckbox2"> Other.
				        </label>				        
				    </div>
				</div>

				<div class="control-group">
				<label class="control-label">If other mention how</label>
				<div class="controls">
					<div class="input-prepend">
						<input type="text" class="input-xlarge" id="other" name="other" placeholder="">
					</div>
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

            	<img class = "controls" src="captcha/captcha.php"> Write these numbers <br>
            	<input class = "controls" type="text" name="vercode" /> 

            <div class="form-actions"> 
                <input type="hidden" name="send" value="contact">
                <button type="submit" class="btn btn-success">Send</button>  
            </div>
			
		</form>
	</div>
</div>