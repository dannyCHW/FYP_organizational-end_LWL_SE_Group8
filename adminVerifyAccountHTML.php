<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="adminDashCss.css">
    <!-- Boxicons CDN Link -->
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
<body>

  <?php include 'bar/adminToolbar.php';?>


  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Verify Account</span>
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
              <th>Org ID</th>
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


    </body>

  </section>



</body>
</html>
