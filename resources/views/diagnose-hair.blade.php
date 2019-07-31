@extends('layout.main')

@section('title', 'Diagnose your hair')

@section('stylesheet')

<style type="text/css">
	.tab {
		display: none;
	}
	.step {
  	height: 15px;
  	width: 15px;
	  margin: 0 2px;
  	background-color: #bbbbbb;
	  border: none;  
  	border-radius: 50%;
	  display: inline-block;
  	opacity: 0.5;
	}

	.step.active {
  	opacity: 1;
	}

	.step.finish {
  	background-color: #b5035b;
	}
</style>

@endsection

@section('content')

@include('layout.navigation')

<div class="container container-diagnose" data-toggle="buttons">
	<form id="dhForm" method="post" action="">

		<!-- Step 1 -->
		<div class="tab">
			<h3 class="title-diagnose">How old are you?</h3>
			<div class="btn-group-toggle text-center">
				<label class="btn btn-diagnose">
					<input type="radio" name="age" value="0" autocomplete="off"> Under 20
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="age" value="0" autocomplete="off"> 20 - 30
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="age" value="0" autocomplete="off"> 31 - 40
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="age" value="0" autocomplete="off"> 41 and Above
				</label>
			</div>
		</div>

		<!-- Step 7 -->
		<div class="tab">
			<h3 class="title-diagnose">How thick is your hair?</h3>
			<div class="btn-group-toggle text-center">
				<label class="btn btn-diagnose">
					<input type="radio" name="hairthickness" value="0" autocomplete="off"> Super Fine
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairthickness" value="0" autocomplete="off"> Fine
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairthickness" value="0" autocomplete="off"> Medium
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairthickness" value="0" autocomplete="off"> Thick
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairthickness" value="0" autocomplete="off"> Super Thick
				</label>
			</div>
		</div>

		<!-- Step 8 -->
		<div class="tab">
			<h3 class="title-diagnose">What do you usually do to your hair?</h3>
			<div class="btn-group-toggle text-center">
				<label class="btn btn-diagnose">
					<input type="radio" name="hairdo" value="0" autocomplete="off"> I color my hair
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairdo" value="0" autocomplete="off"> I use smoothing treatment
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairdo" value="0" autocomplete="off"> I perm my hair
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairdo" value="0" autocomplete="off"> I curl it everyday
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairdo" value="0" autocomplete="off"> None of the above
				</label>
			</div>
		</div>

		<!-- Step 9 -->
		<div class="tab">
			<h3 class="title-diagnose">How do you style your hair?</h3>
			<div class="btn-group-toggle text-center">
				<label class="btn btn-diagnose">
					<input type="radio" name="hairstyle" value="0" autocomplete="off"> Flat iron
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairstyle" value="0" autocomplete="off"> Curling iron
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairstyle" value="0" autocomplete="off"> Braids, twists, faux locs
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairstyle" value="0" autocomplete="off"> Wash and dry
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairstyle" value="0" autocomplete="off"> I don't do anything!
				</label>
			</div>
		</div>

		<!-- Step 10 -->
		<div class="tab">
			<h3 class="title-diagnose">Type of coloring?</h3>
			<div class="btn-group-toggle text-center">
				<label class="btn btn-diagnose">
					<input type="radio" name="typecolor" value="0" autocomplete="off"> Permanent color
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="typecolor" value="0" autocomplete="off"> Semi permanent color
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="typecolor" value="0" autocomplete="off"> Highlight
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="typecolor" value="0" autocomplete="off"> Other
				</label>
			</div>
		</div>

		<!-- Step 11 -->
		<div class="tab">
			<h3 class="title-diagnose">How often do you usually wash your hair a week?</h3>
			<div class="btn-group-toggle text-center">
				<label class="btn btn-diagnose">
					<input type="radio" name="washhair" value="0" autocomplete="off"> Less than once
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="washhair" value="0" autocomplete="off"> 1-2 times
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="washhair" value="0" autocomplete="off"> 2-3 times
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="washhair" value="0" autocomplete="off"> 6 or more times
				</label>
			</div>
		</div>

		<!-- Step 12 -->
		<div class="tab">
			<h3 class="title-diagnose">What causes hair aging?</h3>
			<div class="btn-group-toggle text-center">
				<label class="btn btn-diagnose">
					<input type="radio" name="hairaging" value="0" autocomplete="off"> Hairdrying
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairaging" value="0" autocomplete="off"> Lifestyle
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairaging" value="0" autocomplete="off"> Food
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairaging" value="0" autocomplete="off"> Pollutants
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairaging" value="0" autocomplete="off"> Coloring
				</label>
			</div>
		</div>

		<!-- Step 13 -->
		<div class="tab">
			<h3 class="title-diagnose">What's your hair goal?</h3>
			<div class="btn-group-toggle text-center">
				<label class="btn btn-diagnose">
					<input type="radio" name="hairgoal" value="0" autocomplete="off"> Give life to dry and lifeless hair
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairgoal" value="0" autocomplete="off"> Make my hair smooth and silky
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairgoal" value="0" autocomplete="off"> Create va va volume
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairgoal" value="0" autocomplete="off"> Create natural fresh looking
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairgoal" value="0" autocomplete="off"> Make my black locks shine
				</label>
			</div>
		</div>

		<!-- Step 14 -->
		<div class="tab">
			<h3 class="title-diagnose">What's your biggest hair challange?</h3>
			<div class="btn-group-toggle text-center">
				<label class="btn btn-diagnose">
					<input type="radio" name="hairchallange" value="0" autocomplete="off"> Hairfall
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairchallange" value="0" autocomplete="off"> Damage & breakage
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairchallange" value="0" autocomplete="off"> Dryness
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairchallange" value="0" autocomplete="off"> Dull
				</label>
				<label class="btn btn-diagnose">
					<input type="radio" name="hairchallange" value="0" autocomplete="off"> Dandruff
				</label>
			</div>
		</div>

		<div class="btn-diagnose-nav text-center">
			<div class="btn-group btn-group-toggle">
				<button class="btn btn-secondary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
				<button class="btn" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
			</div>
		</div>

		

		<div style="text-align:center;margin-top:40px;">
    	<span class="step"></span>
    	<span class="step"></span>
    	<span class="step"></span>
    	<span class="step"></span>
    	<span class="step"></span>
    	<span class="step"></span>
    	<span class="step"></span>
    	<span class="step"></span>
    	<span class="step"></span>
  	</div>

	</form>
</div>

@endsection

@section('script')

<script type="text/javascript">
	$(document).ready(function() {
		$().button('toggle');
	});

	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab

	function showTab(n) {
  	// This function will display the specified tab of the form...
  	var x = document.getElementsByClassName("tab");
  	x[n].style.display = "block";
  	//... and fix the Previous/Next buttons:
  	if (n == 0) {
    	document.getElementById("prevBtn").style.display = "none";
  	} else {
    	document.getElementById("prevBtn").style.display = "inline";
  	}
  	if (n == (x.length - 1)) {
    	document.getElementById("nextBtn").innerHTML = "Submit";
	  } else {
  	  document.getElementById("nextBtn").innerHTML = "Next";
  	}
	  //... and run a function that will display the correct step indicator:
  	fixStepIndicator(n)
	}

	function nextPrev(n) {
  	// This function will figure out which tab to display
  	var x = document.getElementsByClassName("tab");
  	// Exit the function if any field in the current tab is invalid:
  	if (n == 1 && !validateForm()) return false;
  	// Hide the current tab:
  	x[currentTab].style.display = "none";
  	// Increase or decrease the current tab by 1:
  	currentTab = currentTab + n;
  	// if you have reached the end of the form...
  	if (currentTab >= x.length) {
    	// ... the form gets submitted:
    	document.getElementById("regForm").submit();
    	return false;
  	}
  	// Otherwise, display the correct tab:
  	showTab(currentTab);
	}

	function validateForm() {
	  // This function deals with validation of the form fields
  	var x, y, i, valid = true;
  	x = document.getElementsByClassName("tab");
  	y = x[currentTab].getElementsByTagName("input");
  	// A loop that checks every input field in the current tab:
  	for (i = 0; i < y.length; i++) {
    	// If a field is empty...
    	if (y[i].value == "") {
      	// add an "invalid" class to the field:
      	y[i].className += " invalid";
      	// and set the current valid status to false
      	valid = false;
    	}
  	}
  	// If the valid status is true, mark the step as finished and valid:
  	if (valid) {
    	document.getElementsByClassName("step")[currentTab].className += " finish";
  	}
  	return valid; // return the valid status
	}

	function fixStepIndicator(n) {
  	// This function removes the "active" class of all steps...
  	var i, x = document.getElementsByClassName("step");
  	for (i = 0; i < x.length; i++) {
  	  x[i].className = x[i].className.replace(" active", "");
  	}
  	//... and adds the "active" class on the current step:
  	x[n].className += " active";
	}
</script>

@endsection