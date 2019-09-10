
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">

<h1>WELCOME TO GAANA SUNO</h1>
<title>GAANASUNO.COM

</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<body bgcolor="#E74C3C">


	<div class="w3-bar w3-red">
  <a href="signup.html" class="w3-bar-item w3-button">Sign up</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
  <a href="about us.html" class="w3-bar-item w3-button">About us</a>
  <a href="faqs.html" class="w3-bar-item w3-button">FAQs</a>
</div>


	<form method="post" action="login.php">
		<table>
			<tr>
				<td>User name</td>
				<td><input type="text" name="uname" value="<?php if(isset($_COOKIE["uname"])){echo $_COOKIE["uname"];} ?>"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="passwword" value="<?php if(isset($_COOKIE["passwword"])){echo $_COOKIE["passwword"];} ?>"></td>
			</tr>
<input type="checkbox" name="remember">Remember Me
			<tr>
				<td></td>
				<td><input type="submit" value="login"></input></td>
			</tr>
			
		</table>
	</form>
	<img src="https://images.unsplash.com/photo-1513829596324-4bb2800c5efb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"> 
	<style>
	img {
  position: absolute;
  left: auto;
  top: auto;
  width: 50%;
}
<style>

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
   position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
 .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
 .dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
   display: block;
}

/* Change color of dropdown links on hover */
 .dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>

<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Home</a>
    <a href="#">Contact</a>
    <a href="#">About us</a>
     <a href="#">FAQs</a>
  </div>
</div> 

</style>
</body>
</html>
Thanks a lot.Got it, thanks!Received, thank you.
