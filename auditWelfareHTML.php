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
      $("#vtable #btnDetail").click(function(){
        var eventID = $(this).parents('tr').find("td:eq(4)").text();
        ////
        $.ajax({
          type: "POST",
          url:"auditWelfareAjax.php",
          data:{'eventID':eventID},
          success:function(result){
            window.location.href = "eventDetailHTML.php";
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
          <h3>Verify Account:</h3>
      </div>
      <table style="width:100%;margin=0px;margin-bottom:300px;" id="vtable">
        <thead style="font-size:20px;font-weight:bold;color:black;height:100px;">
          <tr>
            <th>Event Name</th>
            <th>Org Name</th>
            <th>Start Date</th>
            <th>More Detail</th>
            <th hidden>Event ID</th>
          </tr>
        </thead>
        <?php include 'eventList.php';?>
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
