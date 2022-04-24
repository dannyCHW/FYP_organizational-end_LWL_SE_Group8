<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Admin Login-Smart Form</title>
    <link rel="stylesheet" href="adminLoginCss.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="plugins/jquery-3.3.1-dist/jquery.min.js"></script>
    <style>
    #submitBtn{
      margin-left: -230px;
      background:#303030;
      color:white;
      text-align: right;
      cursor: pointer;
      transition: all 1s ease-out;
    }
    #submitBtn:hover{
    background:#be1dcc;
    transition: all 0.3s ease-in;
    }
    </style>
   </head>
<body>

<div id="warp">
  &nbsp;Smart Form - Admin Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<div class="admin">
			      <div class="rota">
				        <h1>ADMIN</h1>
                <form id="loginForm" action="adminLogin.php" method="POST" novalidate>
        				      <input id="username" type="text" name="email" value="" placeholder="Email"/><br />
				              <input id="password" type="password" name="pw" value="" placeholder="Password"/>
                        <button id="submitBtn" type="submit" name="submit">Submit</button><br />
                </form>
      			</div>
    		</div>
    		<div class="cms">
      			<div class="roti">
			        	<h1>Back</h1>
				        <button id="btnBack" type="button" name="valid">Back To Front Page</button><br />
				        <p><a href="#">Forgot Password</a> <a href="#">Help</a></p>
            </div>
    		</div>
      </div>
</body>
</html>
