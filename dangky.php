<!DOCTYPE html>
<?php include("stye.php"); 
include("include.php");
?>
<html>
<head>
<style>
	.row
	{
		background-image:url(img/2000px-Logo_mango_airline.svg.png);
		
		background-repeat: no-repeat;
		background-size: 100% 100%;
		height: 800px;
		background-attachment: fixed;
	}
	</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:#1B1A1A;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <div class="login-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit">Login</button>
    </form>
  </div>
</div>


<div class="row">
 <div class="mango">
 	<div class="col-md-8"></div>
 </div> 
  
  <div class="col-md-4">
  <div style="margin:30px">
  	<form action="xuly_dangky.php" method="post" enctype="multipart/form-data">
  	<div class="form-group">
    <label>Nam</label>
    <input type="text" class="form-control "name ="Ten" placeholder="Ten nguoi dung">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <select class="form-control" name="gioitinh">
  <option>NAM</option>
  <option>NỮ</option>
  <option>BÊ ĐÊ</option>

</select>
 <div class="form-group">
    <label for="exampleInputPassword1">NĂM SINH</label>
    <input type="date" class="form-control" name="namsinh" placeholder="...">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="img">
    
  </div>
  
  <button type="submit" class="btn btn-default">Đăng ký</button>
</form>
  </div>
  	
  </div>
</div>

</body>
</html>

