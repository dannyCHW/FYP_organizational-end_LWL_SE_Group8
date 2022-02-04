<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'format/HTMLheader.php';?>
  <style>
   tr th { }
   tr td{
     color:black;
     font-weight:bold;

   }
  </style>
  <script>
    $( document ).ready(function() {
      $.ajax({url:"verifyAccountList.php",success:function(result){
      }});

      $("#vtable #accept").click(function(){
        var orgID = $(this).parents('tr').find("td:eq(1)").text();
        ////
        $.ajax({
          type: "POST",
          url:"adminAcceptAccountAjax.php",
          data:{'id':orgID},
          success:function(result){
            location.reload();
            alert("Accept");
        }});
        ////
      });

      $("#vtable #reject").click(function(){
        var orgID = $(this).parents('tr').find("td:eq(1)").text();
        ////
        $.ajax({
          type: "POST",
          url:"adminRejectAccountAjax.php",
          data:{'id':orgID},
          success:function(result){
            location.reload();
            alert("Reject");
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
    <div class="center">
      <div class="form-header">
          <h3>Verify Account:</h3>
      </div>
      <table style="width:100%;margin=0px;margin-bottom:300px;" id="vtable">
        <thead style="font-size:20px;font-weight:bold;color:black;height:100px;">
          <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Document</th>
            <th>Accept</th>
            <th>Reject</th>
          </tr>
        </thead>
        <?php include 'verifyAccountList.php';?>
      </table>
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
