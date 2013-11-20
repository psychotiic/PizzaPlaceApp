window.onload=function(){
	localStorage.setItem('username','test');
	localStorage.setItem('password','test');
}

function login(){
	var username = localStorage.getItem("username");
	var password = localStorage.getItem("password");
	if($('input[id=username]').val() == username && $('input[id=password]').val() == password)
	{
	oAuth();
	}
	else
	{
		alert("Please enter a VALID Username & Password!");	
	}
}

function oAuth(){
$.mobile.changePage( "#quotePage", {
  transition: "pop",
  reverse: false,
  changeHash: false
});
}

function run(){
	var symbol = $('input[id=symb]').val();
	$.ajax({
  url: "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20csv%20where%20url%3D'http%3A%2F%2Fdownload.finance.yahoo.com%2Fd%2Fquotes.csv%3Fs%3D"+symbol+"%26f%3Dsl1d1t1c1ohgv%26e%3D.csv'%20and%20columns%3D'symbol%2Cprice%2Cdate%2Ctime%2Cchange%2Ccol1%2Chigh%2Clow%2Ccol2'&format=json",
  dataType: 'json',
  success: function(data) { 
    console.log(data);
    var price = data.query.results.row.price;
    $("#stock").append('<p>'+symbol+'&rsquo;s stock price: $'+price);
  },
  error: function() {
    $("#stock").html('<p>Something has gone terribly wrong.</p>');
  }
});
}

function registerAccountPage(){
$.mobile.changePage( "#registerPage", {
  transition: "pop",
  reverse: false,
  changeHash: false
});
}

function registerAccount(){
	var user = $('input[id=usernameREG]').val();
	var pass = $('input[id=passwordREG]').val();
	localStorage.setItem('username',user);
	localStorage.setItem('password',pass);
	//alert("Registration Success!");
	logout();//code reuse sends user to login :)
}

function logout(){
	$.mobile.changePage( "#loginPage", {
  transition: "pop",
  reverse: false,
  changeHash: false
});
}