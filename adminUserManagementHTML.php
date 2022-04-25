<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>User Management-Smart Form</title>
    <link rel="stylesheet" href="adminDashCss.css">
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
       </style>
       <script>
         $( document ).ready(function() {
           $("#vtable #managementBtn").click(function(){
             var orgID = $(this).parents('tr').find("td:eq(5)").text();
             ////
             $.ajax({
               type: "POST",
               url:"adminViewOrgAccount.php",
               data:{'orgID':orgID},
               success:function(result){
                 window.location.href = "adminOrgInfoHTML.php";
             }});
             ////
           });
         });
       </script>
   </head>
<body>

  <?php include 'bar/adminToolbar.php';?>
  <?php include 'checkSession/adminCheckSession.php';?>


  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">User Management</span>
      </div>
    </nav>

    <main>
      <div class="center" >
        <div class="form-header">
            <h3>Verify Event:</h3>
        </div>
        <table style="width:100%;margin-top:5%;margin-bottom:300px;" id="vtable">
          <thead style="font-size:20px;font-weight:bold;color:black;height:100px;">
            <tr>
              <th>Org Name</th>
              <th>Email</th>
              <th>Number</th>
              <th>State</th>
              <th>View More</th>
              <th hidden>Event ID</th>

            </tr>
          </thead>
          <?php include 'orgAccountList.php';?>
        </table>

      </div>
    </main>
    <!-- main body end -->


    </body>

  </section>



</body>
</html>
