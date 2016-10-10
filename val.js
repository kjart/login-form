

// this function will execute the form fields on change of events
window.onload = function(){
document.getElementById("name").onkeyup = firstName; // checks the first name pattern
document.getElementById("mail").onkeyup = mail;// checks the email pattern
document.getElementById("password1").onkeyup = valPassword; // validates and checks if the two
document.getElementById("password2").onkeyup = valPassword; // passwords are the same
}

// this function validates the firstname and checks if the pattern
// corresponds to letters only
function firstName(){
var name = document.getElementById("name");
if(name.validity.patternMismatch){
 name.setCustomValidity("Only letters are allowed!");
} // end of if
else{
name.setCustomValidity("");
}// end of else
}// end of firstname()

//// this function validates the email and checks if the pattern conforms to email
function mail(event){
var email = document.getElementById("mail");
  if(email.validity.typeMismatch){
	email.setCustomValidity("please enter a correct email address");
	}// end of if 
	else{
	email.setCustomValidity("");
	}// end of else
}// end of mail
// validates both password and checks if there is a match before submittion
function valPassword(){
var pass2=document.getElementById("password2").value;
var pass1=document.getElementById("password1").value;
if(pass1!=pass2)
	document.getElementById("password2").setCustomValidity("Passwords Don't Match");
else
	document.getElementById("password2").setCustomValidity('');	 
//empty string means no validation error
}
$(document).ready(function(){
$("p").click(function(){
$("#pa").hide();
});
/* this checks if the length of the password is more than eigth or not */
$("#password1").submit(function(){
var pass = document.getElementById("password1").value
var passd = pass.length;
// uses an if statement to control the error message
if(passd < 8){
document.getElementById("password1").setCustomValidity("Password length must be at least 8 characters long!");
} // end if
else{
	document.getElementById("password1").setCustomValidity('');	 
//empty string means no validation error
// end of else statement
}
}); // end of validat length function

// checks if the regex mathches the one used in the form
$("#password1").keyup(function(){
var pop = document.getElementById("password1").value
var letter = /[^0-9]+[^\W]+/;
var numb = /[^a-zA-Z]+[^\W]+/;
var chars = /[^a-zA-Z0-9]+/;
if(letter.test(pop)){
document.getElementById("password1").setCustomValidity("Password too weak...add some numbers or characters!");
}
else if (numb.test(pop)){
document.getElementById("password1").setCustomValidity('password too weak..add some letters or characters!');	
}
else if (chars.test(pop)){
document.getElementById("password1").setCustomValidity('password too weak..add some letters or numbers!');
}
else{
document.getElementById("password1").setCustomValidity('');
}

});
});// end of document function
