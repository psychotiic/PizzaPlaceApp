

function submitPizza(){
	var toppings = document.getElementsByClassName('topping');
	var x, len = toppings.length;
	var order = "Order: \n";

	var toppingList =  {};

	for(x=0;x < len; x++){
		if(toppings[x].checked && toppings[x].value != "None"){
			toppingList[toppings[x].name] = toppings[x].value + "\n";
		}
	}
	var pz = new pizza(toppingList);

	<!-- Access Pizza ordered -->
	//alert(pz.order());
	document.getElementById('outputParagraph').innerHTML=pz.order();
}

function submitDrinks(){
	var drinks = document.getElementsByClassName('drink');
	var DrinkList = new Array();
	var x,count=0;

	for(x = 0; x < drinks.length; x++){
		if(drinks[x].checked){
			DrinkList[count] = new drink(drinks[x]);
			count++;
		}
	}
	<!-- Showing how to access the drinks ordered -->
	var popOrder = "";

	for(x=0;x < DrinkList.length; x++)
		popOrder += DrinkList[x].order() + "\n";

	alert(popOrder);
}

function submitWings(){
	var wings = document.getElementsByClassName('wing');
	var wingList = new Array();
	var x,count=0;

	for(x=0;x<wings.length;x++){
		if(wings[x].checked){
			wingList[count] = new wing(wings[x]);
			count++;
		}
	}

	<!-- Showing how to access the wings ordered -->
	var wingOrder = "";

	for(x=0;x<wingList.length;x++){
		wingOrder += wingList[x].order() + "\n";
	}

	alert(wingOrder);
}