/**
* Author: Mustaque Halder (Student ID: 101028715)
* Target: This js file references apply.html
* Purpose: This file is for apply.html
* Created: 07/09/2017
* Last updated: 27/09/2017
* Credits: Creating Web Applications
*/
"use strict";
// Job Page
// Apply link

//for job 1
function applyone(){
  if(sessionStorage.getItem("refNo")){
    sessionStorage.removeItem("refNo");
  }
  sessionStorage.refNo = "SSSE56";
  window.location.href = "apply.php#apply-heading";
}
//for job 2
function applytwo(){
  if(sessionStorage.getItem("refNo")){
    sessionStorage.removeItem("refNo");
  }
  sessionStorage.refNo = "WBB103";
	window.location.href = "apply.php#apply-heading";
}
//load function for storing data input by the user
function load(){
	if(sessionStorage.getItem("refNo")){
		var ref = document.getElementById("Jobreferencenumber");
		ref.value = sessionStorage.getItem("refNo");
	} else {
		ref.readOnly = false;
	}
	if(sessionStorage.getItem("fname")){
		var fname = document.getElementById("FirstName");
		fname.value = sessionStorage.getItem("fname");
	}
	if(sessionStorage.getItem("lname")){
		var lname = document.getElementById("LastName");
		lname.value = sessionStorage.getItem("lname");
	}
	if(sessionStorage.getItem("day")){
		var day = document.getElementById("Day");
		day.value = sessionStorage.getItem("day");
	}
	if(sessionStorage.getItem("month")){
		var month = document.getElementById("Month");
		month.value = sessionStorage.getItem("month");
	}
	if(sessionStorage.getItem("year")){
		var year = document.getElementById("Year");
		year.value = sessionStorage.getItem("year");
	}
	if(sessionStorage.getItem("gender")){
		if(sessionStorage.getItem("gender") == "female"){
			document.getElementById("female").checked = true;
		} else if(sessionStorage.getItem("gender") == "male"){
			document.getElementById("male").checked = true;
		} else if(sessionStorage.getItem("gender") == "other"){
			document.getElementById("other").checked = true;
		}
	}
	if(sessionStorage.getItem("street")){
		var street = document.getElementById("Street");
		street.value = sessionStorage.getItem("street");
	}
	if(sessionStorage.getItem("town")){
		var town = document.getElementById("Town");
		town.value = sessionStorage.getItem("town");
	}
	if(sessionStorage.getItem("state")){
		var state = document.getElementById("State");
		state.value = sessionStorage.getItem("state");
	}
	if(sessionStorage.getItem("postcode")){
		var postcode = document.getElementById("Postcode");
		postcode.value = sessionStorage.getItem("postcode");
	}
	if(sessionStorage.getItem("email")){
		var email = document.getElementById("email");
		email.value = sessionStorage.getItem("email");
	}
	if(sessionStorage.getItem("phone")){
		var phone = document.getElementById("phone");
		phone.value = sessionStorage.getItem("phone");
	}

}
//form validation

function validateForm(){
	var errors = [];
	var refNov = document.forms["applyform"]["Jobreferencenumber"].value;
  if (refNov == "") {
    errors.push("Job Reference Number is required");
		showError(errors);
		return false;
  }
	var fname = document.forms["applyform"]["firstname"].value;
  if (fname == "") {
    errors.push("First Name must be filled out");
		showError(errors);
		return false;
  } else {
		sessionStorage.fname = fname;
	}
	var lname = document.forms["applyform"]["lastname"].value;
  if (lname == "") {
    errors.push("Last Name must be filled out");
		showError(errors);
		return false;
  } else {
		sessionStorage.lname = lname;
	}
// all for date of birth
	var day = document.forms["applyform"]["day"].value;
	var month = document.forms["applyform"]["month"].value;
	var year = document.forms["applyform"]["year"].value;
	sessionStorage.day = day;
	sessionStorage.month = month;
	sessionStorage.year = year;
	var today = new Date();
	var age = today.getFullYear() - year;
	if (today.getMonth() < month || (today.getMonth() == month && today.getDate() < day)) {
  	age--;
	}
	if(age < 15 || age > 80){
		errors.push("your age is not in the range");
		showError(errors);
		return false;
	}

	// all of dob done,
	sessionStorage.gender = document.forms["applyform"]["gender"].value;
	// all of address and zip and state
	var street = document.forms["applyform"]["street"].value;
	var town = document.forms["applyform"]["town"].value;
	var state = document.forms["applyform"]["state"].value;
	var postcode = document.forms["applyform"]["postcode"].value;
	if (street == "") {
    errors.push("Street must be filled out");
		showError(errors);
    return false;
  } else {
		sessionStorage.street = street;
	}
	if (town == "") {
    errors.push("Town must be filled out");
		showError(errors);
    return false;
  } else {
		sessionStorage.town = town;
	}
	if (postcode == "") {
    errors.push("Post Code must be filled out");
		showError(errors);
    return false;
  }
	var count;
	if(state == "VIC"){
		count = 0;
		if(postcode.charAt(0) == 3 || postcode.charAt(0) == 8){
			count ++;
		}
	} else if(state == "NSW"){
		count = 0;
		if(postcode.charAt(0) == 1 || postcode.charAt(0) == 2){
			count ++;
		}
	} else if(state == "NT"){
		count = 0;
		if(postcode.charAt(0) == 0){
			count ++;
		}
	} else if(state == "QLD"){
		count = 0;
		if(postcode.charAt(0) == 4 || postcode.charAt(0) == 9){
			count ++;
		}
	} else if(state == "WA"){
		count = 0;
		if(postcode.charAt(0) == 6){
			count ++;
		}
	} else if(state == "SA"){
		count = 0;
		if(postcode.charAt(0) == 5){
			count ++;
		}
	} else if(state == "TAS"){
		count = 0;
		if(postcode.charAt(0) == 7){
			count ++;
		}
	} else if(state == "ACT"){
		count = 0;
		if(postcode.charAt(0) == 0){
			count ++;
		}
	}
	if(count == 0){
		errors.push("Not a valid postcode provided");
		showError(errors);
		return false;
	} else {
		sessionStorage.state = state;
		sessionStorage.postcode = postcode;
	}
	var email = document.forms["applyform"]["email"].value;
	if (email == "") {
    errors.push("email must be filled out");
		showError(errors);
    return false;
  } else {
		sessionStorage.email = email;
	}
	var phone = document.forms["applyform"]["phone"].value;
	if (phone == "") {
    errors.push("Phone must be filled out");
		showError(errors);
    return false;
  } else {
		sessionStorage.phone = phone;
	}
	var checkboxOtherSkills = document.getElementById("otherskil");
	var textbox = document.forms["applyform"]["otherskills"].value;

	if (checkboxOtherSkills.checked){
		if (textbox.length < 1){
			errors.push("Other Skills has been selected but not filled out.");
			showError(errors);
			return false;
		}
	}
//last
}
function showError(errors){
	if(errors.length > 0){
		var place = document.getElementById("errorBox");
		errors.forEach(function (error){
			place.innerHTML = '<p>ERROR: ' + error + '</p>';
		});
	}
}
