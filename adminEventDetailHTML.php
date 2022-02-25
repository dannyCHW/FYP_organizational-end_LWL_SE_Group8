<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="adminDashCss.css">
    <link rel="stylesheet" href="adminTableCss.css">
    <link rel="stylesheet" href="adminButtonCss.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
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
         $("#acceptBtn").click(function(){
           ////
           $.ajax({
             url:"adminAcceptEventAjax.php",
             success:function(result){
               window.location.href = "adminEventListHTML.php";
           }});
           ////
         });
         $("#rejectBtn").click(function(){
           ////
           $.ajax({
             url:"adminRejectEventAjax.php",
             success:function(result){
               window.location.href = "adminEventListHTML.php";
           }});
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

    <h2 style="font-size:50px;">Event Information</h2>
    <table class="container">
    	<thead>
    		<tr>
    			<th><h1>Information Column</h1></th>
    			<th><h1>Provide Answer</h1></th>
    		</tr>
    	</thead>

      <?php include 'eventDetail.php';?>

    </table>
    <h2 style="font-size:50px;">Event Information</h2>
    <?php include 'questionDetail.php';?>

    <!-- main body end -->

    <div class="inline" style="position: relative;width:100%;">
          <button class="button-64" role="button"id="rejectBtn" style="justify-content: center;margin-left:19%;">Reject</button>
          <button class="button-64" role="button"id="acceptBtn" style="justify-content: center;">Accept</button>
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
