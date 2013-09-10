<?php 
include 'includes/overall/overallheader.php';?>

<div class="container-fluid">
	<div class="row-fluid">
			<!--Body content-->
					<div class="row-fluid">
			<div class="well well-small" style="margin:40px 0px 0px 40px;">
			<div class="media"  >
				<a class="pull-left" href="#" id="soon" rel="popover">
					<img class="media-object" src="img/courses/avr.jpg">
				</a>
				<div class="media-body">
					<h3 class="media-heading">Embedded system design using AVR Microcontroller</h3>
					<p>Learn to build your system control system using Embedded system design</p>
					<ul>
						<li>Introduction to embedded systems</li>
						<li>Diffrences between Microprocessor and Controller</li>
						<li>AVR Controller Prephrals</li>
						<li>Projects & Apllications</li>
					</ul>
				</div>
			</div>
			</div>
			
			</div>
					<div class="row-fluid">
			<div class="well well-small" style="margin:40px 0px 0px 40px;">
			<div class="media"  >
				<a class="pull-left" href="#" id="soon2" rel="popover">
					<img class="media-object" src="img/courses/clang.jpg">
				</a>
				<div class="media-body">
					<h3 class="media-heading">C Programming Language</h3>
					<p>An introductory course on Programming using C, primarily focusing on:</p>
					<ul>
						<li>What is a programming language?</li>
						<li>Variables, Constants and differences between all data types</li>
						<li>Operators and Expressions</li>
						<li>Control Flow Constructs: (Case statement & Loops)</li>
						<li>Arrays</li>
						<li>Functions</li>
					</ul>
				</div>
			</div>
			</div>
			
			</div>

			<div class="row-fluid">
			<div class="well well-small" style="margin:40px 0px 0px 40px;">
			<div class="media"  >
				<a class="pull-left"  href="#" id="soon3" rel="popover" >
					<img class="media-object" src="img/courses/fluid.jpg">
				</a>
				<div class="media-body">
					<h3 class="media-heading">Fluid Mechanics</h3>
					<p>An introductory course on Fluids, in which you can Learn:</p>
					<ul>
						<li>Fluid Properties</li>
						<li>Fluid Statics</li>
						<li>Fluid Kinematics</li>
						<li>Fluid Dynamics</li>
					</ul>
				</div>
			</div>
			</div>
			
			</div>


			<div class="row-fluid">
			<div class="well well-small" style="margin:40px 0px 0px 40px;">
			<div class="media"  >
				<a class="pull-left" href="player.php?id=<?php echo '6&vid=1';?>">
					<img class="media-object" src="img/courses/ADI.png">
				</a>
				<div class="media-body">
					<h3 class="media-heading">Autodesk Inventor</h3>
					<p>A Full course on Autodesk Inventor software, focusing on all available options you can use like:</p><p>
					<ul>
						<li>Sketch environment</li>
						<li>Drawing, Part, Sketch and Modifying tools</li>
						<li>Constraints, Constraints, Applications Options</li>
						<li>Assembly, 3D Grips</li>
						<li>Sheet Drawing, and MUCH MORE...</li>
					</ul>
				</p>
				</div>
			</div>
			</div>
		</div>




		<div class="row-fluid">
			<div class="well well-small" style="margin:40px 0px 0px 40px;">
			<div class="media"  >
				<a class="pull-left" href="player.php?id=<?php echo '5&vid=1';?>">
					<img class="media-object" src="img/courses/matlab.png">
				</a>
				<div class="media-body">
					<h3 class="media-heading">Matlab basics</h3>
					<p>An introductory course on MATLAB, in whch you can study</p>
					<ul>
						<li>Matrices operations and functions</li>
						<li>Image and sound Processing</li>
						<li>Ploting graphs</li>
						<li>Using loops, Conditional commands and error commands</li>
						<li>Programming & Debugging using m-Files</li>

					</ul>
				</div>
			</div>
			</div>
			</div>

			<div class="row-fluid">
			<div class="well well-small" style="margin:40px 0px 0px 40px;">
			<div class="media"  >
				<a class="pull-left" href="player.php?id=<?php echo '1&vid=1';?>">
					<img class="media-object" src="img/courses/pcb_design.png">
				</a>
				<div class="media-body">
					<h3 class="media-heading">PCB Design</h3>
					<p>This course will give you an excellent knowlage about PCBs, you will know how to deal with:</p>
					<ul>
						<li>Arranging and wiring of Electronic Components</li>
						<li>Automatic and Manual Circuit Routing</li>
						<li>Jumpers and Polygon</li>
						<li>Printing you PCB</li>
					</ul>
				</div>
			</div>
			</div>
		</div>

		<div class="row-fluid">
			<div class="well well-small" style="margin:40px 0px 0px 40px;">
			<div class="media"  >
				<a class="pull-left" href="player.php?id=<?php echo '4&vid=1';?>">
					<img class="media-object" src="img/courses/physics.png">
				</a>
				<div class="media-body">
					<h3 class="media-heading">Physics 1</h3>
					<p>Learn Fundamental physics pricipales like:</p>
					<ul>
						<li>MThermodynamics</li>
						<li>Moment of Inertia</li>
					</ul>
				</div>
			</div>
			</div>
		</div>
	
			<div class="row-fluid">
			<div class="well well-small" style="margin:40px 0px 0px 40px;">
			<div class="media"  >
				<a class="pull-left" href="player.php?id=<?php echo '2&vid=1';?>">
					<img class="media-object" src="img/courses/geometry.png">
				</a>
				<div class="media-body">
					<h3 class="media-heading">Descriptive Geometry</h3>
					<p>Learn The basics of Descriptive Geometry</p>
				</div>
			</div>
			</div>
		</div>
		
<script>  
$(function () { 
	$('a#soon').on('click', function(e) {e.preventDefault(); return true;});
	$('a#soon2').on('click', function(e) {e.preventDefault(); return true;});
	$('a#soon3').on('click', function(e) {e.preventDefault(); return true;});
	$("#soon").popover({ content:'Coming Soon, Stay Tuned!',placement:'left' }); 
	$("#soon2").popover({ content:'Coming Soon, Stay Tuned!',placement:'left' });
	$("#soon3").popover({ content:'Coming Soon, Stay Tuned!',placement:'left' }); 
});  
</script>  

	</div>
</div>
<?php 
include 'includes/overall/overallfooter.php';?>