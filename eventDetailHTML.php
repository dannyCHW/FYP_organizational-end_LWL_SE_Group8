<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'format/HTMLheader.php';?>
  <style>
   tr th {
     text-align:center;
    }
   tr td{
     color:black;
     font-weight:bold;
     text-align:center;
     height: 40px;
     border: 1px solid black;
   }
   .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 70px;
      width: 40%;
      margin-bottom: 50px;
    }

  </style>
  <script>
    $( document ).ready(function() {
      $("#btnAccept").click(function(){
        ////
        $.ajax({
          url:"adminAcceptEventAjax.php",
          success:function(result){
            window.location.href = "auditWelfareHTML.php";
        }});
        ////
      });
      $("#btnReject").click(function(){
        ////
        $.ajax({
          url:"adminRejectEventAjax.php",
          success:function(result){
            window.location.href = "auditWelfareHTML.php";
        }});
        ////
      });
    });
  </script>
</head>

<body style="background-color: #eee8e5;">
    <?php include 'checkSession/adminCheckSession.php';?>
    <?php include 'format/adminLoginTopBar.php';?>
    <?php include 'format/bodyStyle.php';?>
  <!-- nav end -->

  <!-- main body -->
  <main>
    <div class="center" >
      <div class="form-header">
          <h3>Event Detail</h3>
      </div>
      <table style="width:100%;margin=0px;table-layout:fixed;font-size:25px;" id="vtable">
        <thead>
          <tr>
            <th>Column</th>
            <th>Value</th>
          </tr>
        </thead>
        <?php include 'eventDetail.php';?>
      </table>

      <table style="width:100%;margin=0px;margin-top:80px;margin-bottom: 100px;table-layout:fixed;font-size:25px;" id="qtable">
        <thead>
          <tr>
            <th>Index</th>
            <th>Question</th>
          </tr>
        </thead>
        <?php include 'questionDetail.php';?>
      </table>
      <div class="inline">
        <button id='btnAccept' class="container">Accept</button> <button id='btnReject' class="container">Reject</button>
      </div>
    </div>
  </main>
  <!-- main body end -->

  <!-- footer -->
  <?php include 'format/HTMLbottom.php';?>
  <!-- footer end -->

</body>

<link rel="stylesheet" href="css/main.css">
<script src="js/main.js"></script>

</html>
