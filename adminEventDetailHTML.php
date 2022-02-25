<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="adminDashCss.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <style>
     th, td {
       padding: 15px;
       text-align: left;
     }
     #btnViewAllEvent{
       color: #fff;
       background: #0A2558;
       padding: 4px 12px;
       font-size: 15px;
       font-weight: 400;
       border-radius: 4px;
       text-decoration: none;
       transition: all 0.3s ease;
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

   </head>
<body>

  <?php include 'bar/adminToolbar.php';?>


  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>

    <main>
      <div class="center" >
        <div class="form-header">
            <h3>Verify Account:</h3>
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
