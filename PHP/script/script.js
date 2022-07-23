 
 
 
 
// form validation

var gError = "";

function validateForm(){
	"use strick";
	var result = false;
	gError = "";
	var fnameOK = fnamechk();
	var lnameOK = lnamechk();
	var emailOK = emailchk();
	var pcodeOK = pcodechk();
	var pnoOK = pnochk();
	var streetOK = streetchk();
	var cityOK = citychk();
	var stateOK = statechk();
	var enquiryOK = enquirychk();
	if (fnameOK && lnameOK && emailOK && pcodeOK && pnoOK && streetOK && cityOK && stateOK && enquiryOK){
	result = true;
	}
	else{
		alert(gError);
		gError = "";
		result = false;
	}
	return result;
}

// for checking the input of first name
function fnamechk(){
	var name = document.getElementById("fname").value;
	var pattern = /^[a-zA-Z ]+$/ ;
	var fnameOK = true;
	if ((name.length == 0)){
		gError = gError + "Please enter your first name.\n";	//if the input is blank show this message
		fnameOK = false;
	}
	else {
		if (!pattern.test(name)){
			gError = gError + "Please input alphabet characters for first name only.\n";	// if the input have other symbol characters
			fnameOK = false;
		}
		if((name.length > 25)){
			gError = gError + "Your first name cannot exceed 25 characters\n";		//if input exceed 25 characters show this massage
			fnameOK = false;
		}
	}
	return fnameOK;
}

// for checking the input of last name
function lnamechk(){
	var name = document.getElementById("lname").value;
	var pattern = /^[a-zA-Z ]+$/ ;
	var lnameOK = true;
	if ((name.length == 0)){
		gError = gError + "Please enter your last name.\n";		//if the input is blank show this message
		lnameOK = false;
	}
	else {
		if (!pattern.test(name)){
			gError = gError + "Please input alphabet characters for last name only.\n";		// if the input have other symbol characters show this message
			lnameOK = false;
		}
		if((name.length > 25)){
			gError = gError + "Your last name cannot exceed 25 characters\n";	//if input exceed 25 characters show this message
			lnameOK = false;
		}
	}
	return lnameOK;
}

// for checking the input of email
function emailchk(){
	var email = document.getElementById("email");
	var emailOK = false;
	var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/; 
	if (pattern.test(email.value)){
		emailOK = true;
	}
	else{
		emailOK = false;
		gError = gError + "Please enter a valid email address\n";  // if the input not match to the patter show this message
		}
	return emailOK;
}

// for checking the input of street address
function streetchk(){
	var street = document.getElementById("address").value;
	var streetOK = true;
	
	if ((street.length == 0)){
		gError = gError + "Please fill in the street address\n";
		streetOK = false;
	}
	else if ((street.length) > 50){
		gError = gError + "Your street address cannot exceed 50 characters\n";	//if input exceed 50 characters show this message
		streetOK = false;
	}
	return streetOK;
}

// for checking the input of city or town name
function citychk(){
	var city = document.getElementById("city").value;
	var cityOK = true;
	
	if (city.length == 0){
		gError = gError + "Please fill in the city\n";		//if the input is blank show this message
		cityOK = false;
	}
	else if ((city.length) > 30){
		gError = gError + "Your city or town name cannot exceed 30 characters\n";	//if input exceed 30 characters show this message
		cityOK = false;
	}
	return cityOK;
}

// for checking the input of state
function statechk(){
	var state = document.getElementById("state").value;
	var stateOK = false;
	
	if (state.length == 0){
		gError = gError + "Please select a state\n";	//if the input is blank show this message
	}
	else { 
		stateOK = true;
	}
	return stateOK;
}

// for checking the input of postcode
function pcodechk(){
	var pcode = document.getElementById("pcode").value;
	var pcodeOK = true;
		
	if ((pcode.length != 5) || (isNaN(pcode))){
		gError = gError + "Please enter a valid postcode\n";	// if the input length is more than 5 number characters
		pcodeOK = false;
	}
	return pcodeOK;
}

// for checking the input of phone number
function pnochk(){
	var pno = document.getElementById("phone_no").value;
	var pnoOK = true;
	
	if (isNaN(pno) || (pno.length) < 9 || (pno.length) > 10 || (pno.length) == 0){
		gError = gError + "Please enter a valid phone number\n";		// if the input length is more than 10 number characters or the value is blank
		pnoOK = false;
	}
	return pnoOK;
}

// for checking the input of enquiry subject
function enquirychk(){
	var enquiry = document.getElementById("subject").value;
	var enquiryOK = false;
	
	if (enquiry.length == 0){
		gError = gError + "Please select a product which you would like to enquire about\n";
	}
	else{
		enquiryOK = true;
	}
	return enquiryOK;
}


//end of form validation

//nav menubar
// to control the drop-down list of the nav menu bar
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function showList() {
  document.getElementById("myDropdown").classList.toggle("show");
}




//Storing first optgroup into array and return the result

function pList1() {
    var select = document.getElementById("product");

    var options = ["Logitech G413 Carbon", "Logitech G513 Carbon", "Logitech Pro X", "HyperX FPS Alloy", "HyperX Alloy Elite RGB", "HyperX Alloy Core RGB", "Razer BlackWidow", "Razer HuntsMan Elite"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
	return options;
}
//end of storing product list 1


//Storing second optgroup into array and return the result

function pList2() {
    var select = document.getElementById("product");

    var options = ["Logitech G502 Lightspeed", "HyperX Pulsefire FPS Pro", "HyperX Pulsefire Dart", "HyperX Pulsefire Raid", "Razer Mamba Elite", "Razer Viper"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
	return options;
}
//end of storing product list 2

//Storing third optgroup into array and return the result

function pList3() {
    var select = document.getElementById("product");

    var options = ["Razer Wolverine Ultimate", "Razer Raiju Mobile", "Razer Raiju Tournament Edition", "X-box Elite One", "Nacon Revolution Unlimited", "Sony Dualshock 4"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
	return options
}
//end of storing product list 3



// to store the product value 
function storeSub() {
	if (sessionStorage.product == null){
		sessionStorage.product = "";
		document.getElementById("subject").value = sessionStorage.product;
	}
	else{
		document.getElementById("subject").value = sessionStorage.product;
	}		
}

//change the value of the session storage according to the new product selected by user
function changeValue(){
    var product = document.getElementById("product").value;
    sessionStorage.product = product;
    document.getElementById("subject").value = sessionStorage.product;
}

// to clear all the session storage
function resetStorage(){
	sessionStorage.clear();
}



// set the product 1 info to the session storage and send it to the enquiry form 
function product1_1(){
	sessionStorage.setItem("product", "Logitech G413 Carbon");
}
function product1_2(){
	sessionStorage.setItem("product", "Logitech G513 Carbon");
}
function product1_3(){
	sessionStorage.setItem("product", "Logitech Pro X");
}
function product1_4(){
	sessionStorage.setItem("product", "HyperX FPS Alloy");
}
function product1_5(){
	sessionStorage.setItem("product", "HyperX Alloy Elite RGB");
}
function product1_6(){
	sessionStorage.setItem("product", "HyperX Alloy Core RGB");
}
function product1_7(){
	sessionStorage.setItem("product", "Razer BlackWidow");
}
function product1_8(){
	sessionStorage.setItem("product", "Razer HuntsMan Elite");
}
// end of product 1

// set the product 2 info to the session storage and send it to the enquiry form 
function product2_1(){
	sessionStorage.setItem("product", "Logitech G502 Lightspeed");
}
function product2_2(){
	sessionStorage.setItem("product", "HyperX Pulsefire FPS Pro");
}
function product2_3(){
	sessionStorage.setItem("product", "HyperX Pulsefire Dart");
}
function product2_4(){
	sessionStorage.setItem("product", "HyperX Pulsefire Raid");
}
function product2_5(){
	sessionStorage.setItem("product", "Razer Mamba Elite");
}
function product2_6(){
	sessionStorage.setItem("product", "Razer Viper");
}
// end of product 2

// set the product 3 info to the session storage and send it to the enquiry form 
function product3_1(){
	sessionStorage.setItem("product", "Razer Wolverine Ultimate");
}
function product3_2(){
	sessionStorage.setItem("product", "Razer Raiju Mobile");
}
function product3_3(){
	sessionStorage.setItem("product", "Razer Raiju Tournament Edition");
}
function product3_4(){
	sessionStorage.setItem("product", "X-box Elite One");
}
function product3_5(){
	sessionStorage.setItem("product", "Nacon Revolution Unlimited");
}
function product3_6(){
	sessionStorage.setItem("product", "Sony Dualshock 4");
}

// end of product 1








