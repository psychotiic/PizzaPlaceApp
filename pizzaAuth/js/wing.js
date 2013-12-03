function wing(wings){
	this.flavor = wings.value;
	this.amount = getAmount(wings);
	this.order = getOrder;
}

function getAmount(wings){
	var selectSize = document.getElementsByClassName(wings.value + "size")[0];
	return selectSize.options[selectSize.selectedIndex].value;
}

function getOrder(){
	return this.amount + " " + this.flavor + " wings";
}