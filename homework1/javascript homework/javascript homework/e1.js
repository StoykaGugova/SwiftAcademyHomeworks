var x = "Peter";
var y = 4;
var person = {fistname:'Peter', lastName:'Johnson', age:15};
    var i = false;
	
	var summer;
	var table_row = null;
	let symbol1 = Symbol();
	
	
	document.getElementById("typeof").innerHTML = 
	typeof x + "</br>" + 
	typeof y + "</br>" +
	typeof person + "</br>" +
	typeof i + "</br>" +
	typeof summer + "</br>" +
	typeof table_row + "</br>" +
	typeof symbol1;
	
	var fruits = undefined;
	var numbers = null;
	
	document.getElementById("ex3").innerHTML = 
	typeof fruits + "</br>" +
	typeof numbers;
	