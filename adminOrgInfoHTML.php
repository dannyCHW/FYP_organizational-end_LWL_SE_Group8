<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <title>Event Detail-Smart Form</title>
    <link rel="stylesheet" href="adminDashCss.css">
    <link rel="stylesheet" href="adminTableCss.css">
    <link rel="stylesheet" href="adminButtonCss.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="plugins/jquery-3.3.1-dist/jquery.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <style>
     .inline {
       display: inline-block;
     }
     #acceptBtn{
       background-color: green;
       font-weight: bold;
       color:#ffffff;
     }
     #rejectBtn{
       background-color: red;
       font-weight: bold;
       color:#ffffff;
     }
     </style>


     <script>
       $( document ).ready(function() {

         var checkState = $("#lbState").text();

         if(checkState == "active"){
           $("#disableBtn").show();
         }else{
           $("#activeBtn").show();
         }

         $("#disableBtn").click(function(){
           ////
          if(confirm("Are you sure you want to disable this account?")){
             $.ajax({
               type: "POST",
               url:"adminDisableAccount.php",
               success:function(result){
                 alert("Disable success.");
                 location.reload();
             }});
           }else{

          }
           ////
         });
         $("#activeBtn").click(function(){
           ////
           if(confirm("Are you sure you want to active this account?")){
           $.ajax({
             type: "POST",
             url:"adminActiveAccount.php",
             success:function(result){
               alert("Active success.");
               location.reload();
           }});
         }else{
           
         }
           ////
         });

       });
     </script>
   </head>

   </head>
<body>

  <?php include 'bar/adminToolbar.php';?>
  <?php include 'checkSession/adminCheckSession.php';?>


  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>
</br></br></br></br>

    <h2 style="font-size:50px;margin-bottom:50px;margin-top:40px;">Account Information</h2>
    <table class="container">
    	<thead>
    		<tr>
    			<th><h1>Column</h1></th>
    			<th><h1>Information</h1></th>
    		</tr>
    	</thead>

      <?php include 'checkOrgDetail.php';?>


    </table>

    <!-- main body end -->

    <div class="inline" style="position: relative;width:100%;">
          <button class="button-64" role="button"id="disableBtn" style="justify-content: center;margin-left:30%;" hidden>Disable This Account</button>
          <button class="button-64" role="button"id="activeBtn" style="justify-content: center;margin-left:30%;" hidden>Active This Account</button>
    </div>
    </section>
  </body>





  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
