<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Make an appointment</title>
		<link rel="stylesheet" type="text/css" href="jsCalendar.css">  
		<link rel="stylesheet" href="pro.css">
		<script type="text/javascript" src="jsCalendar.js"></script>
	</head>
	<body>
		<form id="MAp" action="confirm.php" method="post" onsubmit="return submitForm()">
		<div class="doctor-list">
			<p>Find a doctor from the list:</p>
		<select id="dr-selection">
		    <option value="select">Select</option>
		    <option value="dentist">Dentist</option>
		    <option value="practitioner">General Practitioner</option>
		    <option value="ophthalmologist">Ophthalmologist</option>
		</select>

		</div>
		<div class="description">
			<div><br><br>Click the box bellow and select a day to book an appointment:</div>
		</div>

		<!-- Date picker element -->
		<input id="date-input" type="text" value=""/>
		<!-- Calendar element -->
		<div id="date-picker-calendar"></div>
		<div class="description">
			<div><br>Select your suitable time:</div>
		</div>
		<div class="time_selection">
			<label class="container">09:00 - 10:00 AM
			  <input type="radio" checked="checked" name="radio">
			  <span class="checkmark"></span>
			</label>
			<label class="container">10:30 - 11:30 AM
			  <input type="radio" name="radio">
			  <span class="checkmark"></span>
			</label>
			<label class="container">12:30 - 01:30 PM
			  <input type="radio" name="radio">
			  <span class="checkmark"></span>
			</label>
			<label class="container">02:00 - 03:00 PM
			  <input type="radio" name="radio">
			  <span class="checkmark"></span>
			</label>
			<label class="container">03:30 - 04:30 PM
			  <input type="radio" name="radio">
			  <span class="checkmark"></span>
			</label>
			<label class="container">05:00 - 06:00 PM
			  <input type="radio" name="radio">
			  <span class="checkmark"></span>
			</label>
			<label class="container">06:30 - 07:30 PM
			  <input type="radio" name="radio">
			  <span class="checkmark"></span>
			</label>
			<label class="container">08:00 - 09:00 PM
			  <input type="radio" name="radio">
			  <span class="checkmark"></span>
			</label>
			<br>
			<div class="submission">
				<input id="submit" type= "submit" value= "Submit">
			</div>
		</div>
		</form>
		<!-- Create the calendar -->
		<script type="text/javascript">
			function submitForm(){
				var dr = document.getElementById('dr-selection').value;
				if (dr == document.getElementById('dr-selection')[0].value){
					alert("Choose a doctor!");
		    		return false;
				}
				var date = document.getElementById('date-input').value;
				if(date==''){
					alert("Pick a date");
					return false;
				}
		    	return true;
			}
			// Get elements
			var elements = {
				// Input element
				input : document.getElementById("date-input"),
				// Calendar element
				calendar : document.getElementById("date-picker-calendar"),
				// Close btn
				close : document.createElement('div')
			}
			
			// Hide calendar element
			elements.calendar.style.display = "none";
			elements.calendar.style.position = "absolute";

			// Create the calendar
			var calendar = jsCalendar.new(elements.calendar);

			// Add close button
			elements.close.textContent = "×";
			elements.close.style.position = "absolute";
			elements.close.style.top = "-2px";
			elements.close.style.right = "-2px";
			elements.close.style.height = "24px";
			elements.close.style.width = "24px";
			elements.close.style.textAlign = "center";
			elements.close.style.lineHeight = "24px";
			elements.close.style.backgroundColor = "#F44336";
			elements.close.style.borderRadius = "12px";
			elements.close.style.boxShadow = "0px 0px 2px #000000";
			elements.close.style.cursor = "pointer";
			elements.calendar.appendChild(elements.close);

			// Add events
			calendar.onDateClick(function(event, date){
				// Set input date
				elements.input.value = jsCalendar.tools.dateToString(date, "DD/MM/YYYY", "en");
				// Update calendar date
				calendar.set(date);
				// Hide calendar
				elements.calendar.style.display = "none";
			});

			// Open calendar
			elements.input.addEventListener("focus", function(){
				elements.calendar.style.top = elements.input.offsetTop + elements.input.offsetHeight + "px";
				elements.calendar.style.left = elements.input.offsetLeft + "px";
				elements.calendar.style.display = "block";
			}, true);
			// Close calendar
			elements.input.addEventListener("change", function(){
				elements.calendar.style.display = "none";
			}, true);
			elements.close.addEventListener("click", function(){
				elements.calendar.style.display = "none";
			}, true);
		</script>
	</body>
</html>
