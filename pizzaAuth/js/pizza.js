function pizza(tops){
	this.size = getPizzaSize();
	this.crust = getPizzaCrust();
	this.toppingItems = tops;
	this.order = getOrder;
}

function getOrder(){
	var order = "";
	order += this.crust + " " + this.size + "\"\n";
	
	var keys = Object.keys(this.toppingItems);

	for(x = 0; x < keys.length; x++){
		order += "- " + keys[x] + " : " + this.toppingItems[keys[x]];
	}
	return order;
}

function getPizzaSize(){
	var sizes = document.getElementsByClassName('size');
	var x;

	for(x=0; x < sizes.length; x++)
		if(sizes[x].checked)
			return sizes[x].value;
}

function getPizzaCrust(){
	var sizes = document.getElementsByClassName('crust');
	var x;

	for(x=0; x < sizes.length; x++)
		if(sizes[x].checked)
			return sizes[x].value;
}