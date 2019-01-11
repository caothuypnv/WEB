function checkLogin(){
	var username = document.getElementById('Username');
	var password = document.getElementById('Password');

	if (username =='thuy.cao' && password == '123') {
		var x = location.href("adminQL.php");
	}
}