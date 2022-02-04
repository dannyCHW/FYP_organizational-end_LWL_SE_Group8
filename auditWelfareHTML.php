<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Form - Form</title>
  <link rel="shortcut icon" type="image/jpg" href="img/favicon.ico" />
  <script src="plugins/jquery-3.3.1-dist/jquery.min.js"></script>
  <script src="plugins/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="plugins/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <style>
   tr th { }
   tr td{
     color:black;
     font-weight:bold;

   }
  </style>
  <script>
    $( document ).ready(function() {

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
      <table style="width:100%;margin=0px;" id="vtable">
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
