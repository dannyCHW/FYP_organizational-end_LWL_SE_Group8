<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smart Form - Sign In</title>
    <?php include 'format/HTMLheader.php';?>
    <style>
        /* Bordered form */
        .form2 {
            border: none;
            border-radius: 15px;
            background-color: #FBF9F8;
            margin: 3.5vw 20vw;
        }

        /* Full-width inputs */
        input[type=text],
        input[type=password] {
            border-radius: 15px;
            /* border: none; */
            width: 100%;
            padding: 8px 10px;
            /* margin: 8px 0; */
            display: inline-block;
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 12px 40px;
        }


    </style>
    <script>
    $( document ).ready(function() {
      $("#singleReportBtn").click(function(){

        $.ajax({
          type: "POST",
          url:"generateSingleReport.php",
          success:function(result){
            window.location.href = "orgEventDashHTML.php";
            alert("Report has been generate, please check your folder. It named by your event Name.");
        }});


      });
    });
      </script>
</head>

<body style="background-color:#EEE8E5;">
  <?php include 'format/HTMLbar.php';?>
    <!-- nav end -->

    <form id="loginForm" action="login.php" method="POST" class="form2 needs-validation" novalidate>
        <div class="container w3-content">
            <h5 style="font-size:150%; color:#8A5122;" class="container w3-center"><b>Sign In</b></h5>

            <p>
                <label for="uid" style="color:#B19F97;">Email:</label>
                <input type="text" name="email" class="form-control" required>
                <label style="font-size:80%; color:#2715FF;" id='jumpAdmin'><a href="" style="text-decoration: none;">Admin Login</a></label>
            </p>

            <p>
                <label for="pw" style="color:#B19F97;">Password:</label>
                <input type="password" id="pw" name="pw" class="form-control" required>
                <label style="font-size:80%; color:#2715FF;"><a href="#" style="text-decoration: none;">Forgot
                        password?</a></label>
            </p>

            <p class="w3-center">
                <button type="submit" class="button-smartform2">&nbsp;Sign In&nbsp;</button>
                <br><br><hr><br><br>
                New user? <label style="color:#2715FF;"><a href="signup.html" style="text-decoration: none;">Create an account</a></label>
            </p>
        </div>
    </form>

    <!-- footer -->
    <p></p>
  <?php include 'format/HTMLbottom.php';?>
    <!-- footer end -->

</body>

<link rel="stylesheet" href="css/main.css">
<script src="js/main.js"></script>
</html>
