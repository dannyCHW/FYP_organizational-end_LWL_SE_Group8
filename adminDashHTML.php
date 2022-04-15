<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="adminDashCss.css">
    <title>Admin Lobby-Smart Form</title>
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
           ['NGO Event',12]
         ]);

         var options = {
           title: 'Gov vs NGO'
         };

         var chart = new google.visualization.PieChart(document.getElementById('pieDiv'));

         chart.draw(data, options);
       }

       function drawLineGraph() {
        // Set Data
        var date1 = (new Date()).toISOString().split('T')[0];

        var day2 = new Date();
        day2.setDate(day2.getDate() - 1);
        var date2 = day2.toISOString().split('T')[0];

        var day3 = new Date();
        day3.setDate(day3.getDate() - 2);
        var date3 = day3.toISOString().split('T')[0];

        var day4 = new Date();
        day4.setDate(day4.getDate() - 3);
        var date4 = day4.toISOString().split('T')[0];

        var day5 = new Date();
        day5.setDate(day5.getDate() - 4);
        var date5 = day5.toISOString().split('T')[0];

        var day6 = new Date();
        day6.setDate(day6.getDate() - 5);
        var date6 = day6.toISOString().split('T')[0];

        var day7 = new Date();
        day7.setDate(day7.getDate() - 6);
        var date7 = day7.toISOString().split('T')[0];


        $.ajax({
          type: "POST",
          url:"adminDashDisplay/sevenDaysEvent.php",
          data:{'date1':date1,'date2':date2,'date3':date3,'date4':date4,'date5':date5,'date6':date6,'date7':date7},
          success:function(result){
            var array = JSON.parse(result);
            var sum1 = array[0];
            var sum2 = array[1];
            var sum3 = array[2];
            var sum4 = array[3];
            var sum5 = array[4];
            var sum6 = array[5];
            var sum7 = array[6];

            var data = google.visualization.arrayToDataTable([
              ['Price', 'Number'],
              [date7,sum1],[date6,sum2],[date5,sum3],[date4,sum4],[date3,sum5],[date2,sum6],[date1,sum7]
              ]);

              var options = {
                title: 'Last 7 Days Total Events',
                hAxis: {title: 'Event Number Counting'},
                vAxis: {title: 'Date'},
                legend: 'none'
              };

              var chart = new google.visualization.LineChart(document.getElementById('lineGraphDiv'));
              chart.draw(data, options);
        }});


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
