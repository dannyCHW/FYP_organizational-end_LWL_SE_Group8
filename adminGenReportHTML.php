<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Verify Account-Smart Form</title>
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

           var now = new Date();

           var day = ("0" + now.getDate()).slice(-2);
           var month = ("0" + (now.getMonth() + 1)).slice(-2);

           var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

           $('#today').val(today);
           $('#formDay').val("2022-01-01");

           $("#submitBtn").click(function(){
             alert("Report generate successful, file called AdminReportxxxxToxxxx.");
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
        <span class="dashboard">Generate Report</span>
      </div>
    </nav>

    <main>
      <center
        <div class="form-header">
          <br /><br /><br /><br /><br />

          <form action="adminGenReport.php" id="reportForm"style="margin-top:10%;" method="POST">

            <h2>Select Date Range:</h2>

            <input id="formDay" name="fromDay"style="margin-top:50px;font-size:24px;width:30%;" type="date"></input>

            <p style="margin-top:20px;"> To </p>

            <input id="today" name="today"style="margin-top:20px;font-size:24px;width:30%;" type="date"></input><br />

            <input type="submit" id="submitBtn"style="margin-top:40px;width:15%;font-size:24px;%;" value="Generate Report">

          </form/>
        </div>


      </center>
    </main>
    <!-- main body end -->


    </body>

  </section>



</body>
</html>
