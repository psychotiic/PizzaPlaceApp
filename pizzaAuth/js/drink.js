function drink(drink){
	this.pop = getType(drink);
	this.popSize = getSize(drink);
	this.amount = getAmount(drink);
	this.order = getOrder;
}

function getOrder(){
	var order = this.popSize + " " + this.pop + " (" + this.amount + ")";
	return order;
}

function getType(drink){
	var name = drink.value;

	if(name == "Water")
		return name;

	var diet = document.getElementsByClassName("diet" + name)[0];

	if(diet.checked)
		return "Diet " + name;
	else
		return name;
}

function getSize(drink){
	var selectSize = document.getElementsByClassName(drink.value + "size")[0];
	return selectSize.options[selectSize.selectedIndex].value;
}

function getAmount(drink){
	var selectAmount = document.getElementsByClassName(drink.value + "quantity")[0];
	return selectAmount.options[selectAmount.selectedIndex].value;
}