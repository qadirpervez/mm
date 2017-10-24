/**
* Author: Mustaque Halder (Student ID: 101028715)
* Target: This js file references about.html and apply.html
* Purpose: This file is for enhancements2.html
* Created: 07/09/2017
* Last updated: 27/09/2017
* Credits: Creating Web Applications
*/
"use strict";


//jQuery fadeToggle() Method
$(document).ready(function(){
    $("#en-button").click(function(){
        $("#div1").fadeToggle(1000);
        $("#div2").fadeToggle(2000);
        $("#div3").fadeToggle(3000);
		$("#div4").fadeToggle(4000);
        $("#div5").fadeToggle(5000);
        $("#div6").fadeToggle(6000);
		$("#div7").fadeToggle(7000);
        $("#div8").fadeToggle(8000);
        $("#div9").fadeToggle(9000);
    });
});

//The setInterval() Method
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("en-clock").innerHTML = d.toLocaleTimeString();
}
