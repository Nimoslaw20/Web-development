


function add(x,y){
	return(x+y);	
}


function subtract(x,y){
	return x-y;
}

function multiply(x,y){
	return x*y;
}

function divide(x,y){
	return x/y;
}

function average(x,y){
	return (x+y)/2;
}

function square(x){
	return x*x;
}

function simpleInterest(principal, rate, time){
	alert ((principal*rate*time)/100);
}

function areaRectangle(length,breadth){
	alert (length*breadth+"cm squared") ;
}

function perimeter(length,breadth){
	alert ((2*length)+(2*breadth)+ " cm");
}

function celciusFahrenheit(degrees){
	alert (degrees*(9/5)+32); 
}



function carArray(){
	/*var cars=['Volvo', 'Dodge', 'Benz', 'Jaguar', 'Bentley', 'Toyota', 'Alfaromeo', 'Kantanka', 'Ferrari', 'Lamborghini' 'Nissan'];	
	cLen=cars.length;
	cars.sort();
	var i;
	for (i=0;i<cLen;i++){
		document.getElementById("demo").innerHTML=cars[i];
	}*/

	var cars, text, cLen, i;
	cars = ["Volvo", "Dodge", "Benz", "Jaguar", "Bentley", "Toyota", "Alfaromeo", "Kantanka", "Ferrari", "Lamborghini" ,"Nissan"];
	cLen = cars.length;
	cars.sort();
	text = "<ul>";
	for (i = 0; i < cLen; i++) {
	    text += "<li>" + cars[i] + "</li>";
	}
	text += "</ul>";

	document.getElementById("demo").innerHTML = text;


}