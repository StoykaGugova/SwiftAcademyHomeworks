var x = 5;
var y = 10;
var z = x + y;
document.getElementById("sum").innerHTML = z;

var dog = {
	legs: 4,
	furColor:"grey",
	bark: function(){
		return console.log("Bau bau");
	}
};

document.getElementById("husky").innerHTML = "The husky has " + dog.legs + " legs";

/*var button = document.getElementById("bark");
button.onclick = dog.bark();*/

function randomInteger(){
	document.getElementById("random").innerHTML = Math.floor(Math.random()*111);
}

var cars = ["Volvo", "Citroen", "Mazda"];

document.getElementById("array").innerHTML = cars;


function mySum(a,b){
	return a+b;
}
x = mySum(3,5);
document.getElementById("function").innerHTML = x;





