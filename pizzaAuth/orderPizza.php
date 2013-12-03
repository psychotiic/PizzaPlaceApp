<!DOCTYPE html>
<html>
<head>
	<title>Build your own pizza</title>
	<script type="text/javascript" src="./js/order.js"></script>
	<script type="text/javascript" src="./js/pizza.js"></script>
	
	 <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="theme.css">
    <script src="./lib/jquery-1.10.1.js"></script>
	<script type="text/javascript" src="./js/index.js"></script>
</head>
<body>
<form method="post">
	<h2>Build your own</h2>
	<hr/>
	<div>
		<h4>Crust</h4>
		<form>
			&nbsp12"<input type="radio" class="size" name="size" value="12" checked="checked">&nbsp
			14"<input type="radio" class="size" name="size" value="14">&nbsp
			16"<input type="radio" class="size" name="size" value="16">&nbsp
			20"<input type="radio" class="size" name="size" value="20">&nbsp
		</form>
		<br>
		<form>
			<table>
				<tr>
					<td>Thin</td>
					<td><input type="radio" class="crust" checked="checked" name="crust" value="Thin Crust"><br></td>
				</tr>
				<tr>
					<td>Hand Tossed</td>
					<td><input type="radio" class="crust" name="crust" value="Hand Tossed"><br></td>
				</tr>
				<tr>
					<td>Deep Dish</td>
					<td><input type="radio" class="crust" name="crust" value="Deep Dish"><br></td>
				</tr>
			</table>
		</form>
	</div>
	<hr/><br>
	<table>
		<th>
			Meat
		</th>
		<th>
			<img src="./img/left.png" width="15px" height="15px">&nbsp
			<img src="./img/whole.png"width="15px" height="15px">&nbsp&nbsp
			<img src="./img/right.png"width="15px" height="15px">&nbsp
			<img src="./img/none.png"width="15px" height="15px">
		</th>
		<tr>
			<td width="95px">Pepperoni</td>
			<td>
				<form>
					<input type="radio" name="Pepperoni" class="topping" value="Left">
					<input type="radio" name="Pepperoni" class="topping" value="All">
					<input type="radio" name="Pepperoni" class="topping" value="Right">
					<input type="radio" name="Pepperoni" class="topping" value="None" checked="checked">
				</form>
			</td>
		</tr>
		<tr>
			<td>Sausage</td>
			<td>
				<form>
					<input type="radio" name="Sausage" class="topping" value="Left">
					<input type="radio" name="Sausage" class="topping" value="All">
					<input type="radio" name="Sausage" class="topping" value="Right">
					<input type="radio" name="Sausage" class="topping" value="None" checked="checked">
				</form>
			</td>
		</tr>
		<tr>
			<td>Ham</td>
			<td>
				<form>
					<input type="radio" name="Ham" class="topping" value="Left">
					<input type="radio" name="Ham" class="topping" value="All">
					<input type="radio" name="Ham" class="topping" value="Right">
					<input type="radio" name="Ham" class="topping" value="None" checked="checked">
				</form>
			</td>
		</tr>
		<tr>
			<td>Beef</td>
			<td>
				<form>
					<input type="radio" name="Beef" class="topping" value="Left">
					<input type="radio" name="Beef" class="topping" value="All">
					<input type="radio" name="Beef" class="topping" value="Right">
					<input type="radio" name="Beef" class="topping" value="None" checked="checked">
				</form>
			</td>
		</tr>
		<tr>
			<td>Bacon</td>
			<td>
				<form>
					<input type="radio" name="Bacon" class="topping" value="Left">
					<input type="radio" name="Bacon" class="topping" value="All">
					<input type="radio" name="Bacon" class="topping" value="Right">
					<input type="radio" name="Bacon" class="topping" value="None" checked="checked">
				</form>
			</td>
		</tr>
	</table>
	<hr/>
	<br>
	<table>
		<th>
			Vegtables
		</th>
		<th>
			<img src="./img/left.png" width="15px" height="15px">&nbsp
			<img src="./img/whole.png"width="15px" height="15px">&nbsp&nbsp
			<img src="./img/right.png"width="15px" height="15px">&nbsp
			<img src="./img/none.png"width="15px" height="15px">
		</th>
		<tr>
			<td width="95px">Green peppers</td>
			<td>
				<form>
					<input type="radio" name="Green Peppers" class="topping" value="Left">
					<input type="radio" name="Green Peppers" class="topping" value="All">
					<input type="radio" name="Green Peppers" class="topping" value="Right">
					<input type="radio" name="Green Peppers" class="topping" value="None" checked="checked">
				</form>
			</td>
		</tr>
		<tr>
			<td>Onions</td>
			<td>
				<form>
					<input type="radio" name="Onions" class="topping" value="Left">
					<input type="radio" name="Onions" class="topping" value="All">
					<input type="radio" name="Onions" class="topping" value="Right">
					<input type="radio" name="Onions" class="topping" value="None" checked="checked">
				</form>
			</td>
		</tr>
		<tr>
			<td>Olives</td>
			<td>
				<form>
					<input type="radio" name="Olives" class="topping" value="Left">
					<input type="radio" name="Olives" class="topping" value="All">
					<input type="radio" name="Olives" class="topping" value="Right">
					<input type="radio" name="Olives" class="topping" value="None" checked="checked">
				</form>
			</td>
		</tr>
		<tr>
			<td>Mushrooms</td>
			<td>
				<form>
					<input type="radio" name="Mushrooms" class="topping" value="Left">
					<input type="radio" name="Mushrooms" class="topping" value="All">
					<input type="radio" name="Mushrooms" class="topping" value="Right">
					<input type="radio" name="Mushrooms" class="topping" value="None" checked="checked">
				</form>
			</td>
		</tr>
	</table>
	<hr/>
	<br>
	<table>
		<th>
			Other
		</th>
		<th>
			<img src="./img/left.png" width="15px" height="15px">&nbsp
			<img src="./img/whole.png"width="15px" height="15px">&nbsp&nbsp
			<img src="./img/right.png"width="15px" height="15px">&nbsp
			<img src="./img/none.png"width="15px" height="15px">
		</th>
		<tr>
			<td width="95px">Extra Cheese</td>
			<td>
				<form>
					<input type="radio" name="Extra Cheese" class="topping" value="Left">
					<input type="radio" name="Extra Cheese" class="topping" value="All">
					<input type="radio" name="Extra Cheese" class="topping" value="Right">
					<input type="radio" name="Extra Cheese" class="topping" value="None" checked="checked">
				</form>
			</td>
		</tr>
		<tr>
			<td>Extra Sauce</td>
			<td>
				<form>
					<input type="radio" name="Extra Sauce" class="topping" value="Left">
					<input type="radio" name="Extra Sauce" class="topping" value="All">
					<input type="radio" name="Extra Sauce" class="topping" value="Right">
					<input type="radio" name="Extra Sauce" class="topping" value="None" checked="checked">
				</form>
			</td>
		</tr>
	</table>
	<hr/>
	<br>			
	<input name="placePizzaOrder" type="submit" onclick="submitPizza();" value="Add to cart" class="btn">
	<!--<button  id="pizzaButton" type="submit" class="btn"/>Place Order -->

	<p name="output" id="outputParagraph" style="float:right" value="test"> 
	
	<?php
	// "session_register()" and "session_start();" both prepare the session ready for use, and "$myPHPvar=5"
	// is the variable we want to carry over to the new page. Just before we visit the new page, we need to
	// store the variable in PHP's special session area by using "$_SESSION['myPHPvar'] = $myPHPvar;"
    $_SESSION['order'] = $userInfo['output'];          
?>
	</form>
</body>
</html>