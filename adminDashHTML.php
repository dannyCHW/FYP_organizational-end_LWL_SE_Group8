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
    <script src="plugins/jquery-3.3.1-dist/jquery.min.js"></script>
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

     <script type='text/javascript'>
       google.charts.load('current', {'packages':['corechart']});
       google.charts.setOnLoadCallback(drawChart);
       google.charts.setOnLoadCallback(drawLineGraph);
       function drawChart() {

         var data = google.visualization.arrayToDataTable([
           ['Task', 'Hours per Day'],
           ['Government Welfare', 4],
           ['NGO Activities',12]
         ]);

         var options = {
           title: 'Gov vs NGO'
         };

         var chart = new google.visualization.PieChart(document.getElementById('pieDiv'));

         chart.draw(data, options);
       }

       function drawLineGraph() {
        // Set Data
        var data = google.visualization.arrayToDataTable([
          ['Price', 'Number'],
          ["18/2/2022",4],["19/2/2022",7],["20/2/2022",8],["21/2/2022",8],["22/2/2022",9],["23/2/2022",9],["24/2/2022",9]
          ]);
        // Set Options
        var options = {
          title: 'Last 7 Days Total Events',
          hAxis: {title: 'Event Number Counting'},
          vAxis: {title: 'Date'},
          legend: 'none'
        };
        // Draw Chart
        var chart = new google.visualization.LineChart(document.getElementById('lineGraphDiv'));
        chart.draw(data, options);
        }
     </script>


     <script>
       $( document ).ready(function() {
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
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>

    <?php include 'adminDashDisplay/adminDashboardTop3.php';?>
    <?php include 'adminDashDisplay/adminDashboardTable2.php';?>

    </div>

    <?php include 'adminDashDisplay/piechart.php';?>
    <?php include 'adminDashDisplay/lineGraph.php';?>
    <?php include 'adminDashDisplay/adminDashboardLine3Box.php';?>

  </section>




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
