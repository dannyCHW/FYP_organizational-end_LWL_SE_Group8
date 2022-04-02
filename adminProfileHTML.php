<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Event List-Smart Form</title>
    <link rel="stylesheet" href="adminDashCss.css">
    <link rel="stylesheet" href="css/formInputCSSadmin.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="plugins/jquery-3.3.1-dist/jquery.min.js"></script>
    <style>
       th, td {
         padding: 15px;
         text-align: left;
       }
       td button{
         width: 50%;
         color: #ffffff;
         font-weight: bold;
         background-color:#0A2558;
        height: 35px;
       }
       input{
         font-size: 20px;
         width:30%;
         margin-left: 40px;
         margin-top: 20px;
         font-weight: bold;
       }
       input[type='checkbox']{
         margin-left: 0px;
       }
       #warning {
         font-size: 15px;
       }
      </style>
       <script type="text/javascript" language="javascript">
          $(document).ready(function(){
            $("changePwd").removeAttr('style');
            $("lbChangePwd").removeAttr('style');

            var name= "<?php   session_start();$name = $_SESSION['name']; echo $name;?>"
            var email= "<?php   $email = $_SESSION['email']; echo $email;?>"
            var stfID= "<?php   $stfID = $_SESSION['stfID']; echo $stfID;?>"
            $("#name").val(name);
            $("#email").val(email);
            $("#stfID").val(stfID);

           $("#btnEdit").click(function(){
             $(this).hide();
             $("#btnCancel").show();
             $("#warning").show();
             $("#btnSubmit").show();
             $("#stfID").css("background-color","		#808080");
             $("#name").removeAttr("readonly");
             $("#email").removeAttr("readonly");
             $("#pwd").removeAttr("readonly");
             $("#newPwd1").removeAttr("readonly");
             $("#newPwd2").removeAttr("readonly");
           });

           $("form").submit(function(e){
             var session_pwd = "<?php   $email = $_SESSION['pwd']; echo $email;?>"
             var name = $("#name").val();
             var email = $("#email").val();
             var pwd = $("#pwd").val();
             var newPwd1 = $("#newPwd1").val();
             var newPwd2 = $("#newPwd2").val();

             if(name == "" || email == ""){
               alert("The name or email cannot empty.");
               e.preventDefault();
             }else if(newPwd1 != newPwd2){
               alert("New passwrod not pair, please check your input.");
               e.preventDefault();
             }else if(session_pwd != pwd){
                alert("Your current password is wrong, please try again.");
                e.preventDefault();
             }else{

             }
           });

           $("#btnCancel").click(function(){
            location.reload();
           });
         });
       </script>
   </head>
<body>
  <?php include 'checkSession/adminCheckSession.php';?>
  <?php include 'bar/adminToolbar.php';?>


  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Your Profile</span>
      </div>
    </nav>

    <main>
      <div class="center" >
        <div class="form-header">
            <br><br><br><br>
        </div>
        <center>
          <form action="adminChangeProfile.php" id="fileForm"style="margin-top:100px;font-size:30px;text-align: left;margin-left:250px;" method="POST">
            <label for="stfID">Staff ID: &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" id="stfID" name="stfID"><label id="warning" hidden readonly required>*Staff ID cannot change</label><br>
            <label for="email">Email: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="email" id="email" name="email" readonly required><br />
            <label for="name">User name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="text" id="name" name="name" readonly required><br><br />
            <label for="pwd">Current Password: &nbsp; &nbsp; &nbsp; &nbsp;</label>
            <input type="password" id="pwd" name="pwd" pattern="(?=.*\d)(?=.*[a-z]).{12,}" required readonly><br>
            <label style="font-size:15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;
              Password format - Use 12 or more characters with a mix of letters, numbers & symbols</label><br>
            <label for="newPwd1">New Password: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;</label>
            <input type="password" id="newPwd1" name="newPwd1" pattern="(?=.*\d)(?=.*[a-z]).{12,}" readonly><label style="font-size:15px;">*Empty this fill if dont want to change password</label><br>
            <label for="newPwd2">New Password: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;</label>
            <input type="password" id="newPwd2" name="newPwd2" pattern="(?=.*\d)(?=.*[a-z]).{12,}" readonly><label style="font-size:15px;">*Empty this fill if dont want to change password</label><br>
            <button type="button" id="btnEdit" >Edit</button>
            <button type="button"id="btnCancel" hidden>Cancel</button>
            <button id="btnSubmit" type="submit" hidden>Submit</button>
          </form>
      </center>

      </div>
    </main>
    <!-- main body end -->


    </body>

  </section>



</body>
</html>
