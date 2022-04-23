<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Smart Form</title>
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.ico" />
    <script src="plugins/jquery-3.3.1-dist/jquery.min.js"></script>
    <!-- Use Bootstrap 5.1 to avoid dropdown input bugs -->
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="plugins/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <!-- Used non-minified Bootstrap CSS stylesheet -->
    <link rel="stylesheet" href="plugins/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/orgDash.css">
    <script src="js/main.js"></script>
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <link href="plugins/material-design-icons-3.0.1/iconfont/material-icons.css" rel="stylesheet">

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

        var options = {'title':'Applicants', 'width':400, 'height':400};

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }

    </script>

    <script>
      $(document).ready(function() {


        $("#t #btnAnswer").click(function(){

          var applicantID = $(this).parents('tr').find("td:eq(4)").text();

          $.ajax({
            type: "POST",
            url:"orgApplicantAnswer.php",
            data:{'applicantID':applicantID},
            success:function(result){
              window.location.href = "orgApplicantAnswerHTML.php";
          }});

        });

        $("#singleReportBtn").click(function(){

          $.ajax({
            type: "POST",
            url:"generateSingleReport.php",
            success:function(result){
              window.location.href = "orgEventDashHTML.php";
              alert("Report has been generate, lease check your folder.");
          }});


        });


      });
    </script>
</head>

<body class="theme-bg-color4">

    <a id="scroll" style="display: none;"><span></span></a>

    <!-- nav -->
    <?php include 'checkSession/orgUserCheckSession.php'; ?>
    <?php include 'format/orgTopBar.php'; ?>
    <?php include 'orgGetEventValue.php'; ?>
    <!-- nav end -->

    <nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ms-4 mx-4">
            <h1 class="h2 theme-color9 theme-bg-color8 addRadiusBorder2 addSurroundedPadding3" ><?php include 'orgDashBoxHTML/heading.php'; ?></h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button id="singleReportBtn"type="button" class="btn btn-sm noBorder theme-color8 btn-smartform3">
                        <span style="padding:10px;"class="material-icons inline_icon"></span>
                        Export Event Report
                    </button>

                    <button id="monthReportBtn" style="padding:10px;" type="button" class="btn btn-sm noBorder theme-color8 btn-smartform3">
                        Export KPI Month Report
                    </button>
                </div>
            </div>
        </div>

        <div class="nav nav-tabs theme-bg-color8 footerRadiusBorder d-flex justify-content-center" id="nav-dashboard-tab" role="tablist">
            <button class="nav-link active theme-color6" style="border-radius: 1rem 1rem 0rem 0rem;" id="nav-dashboard-tab" data-bs-toggle="tab"
                data-bs-target="#nav-dashboard" type="button" role="tab" aria-controls="nav-dashboard"
                aria-selected="false" onfocus="navTabsNowFocus(this);"><span class="material-icons inline_icon">Dashboard</span></button>
        </div>
    </nav>







    <div class="tab-content theme-bg-color8 theme-color6 navbarRadiusBorder addShadow" id="nav-tabContent">

        <div class="tab-pane fade show active" id="nav-dashboard" role="tabpanel" aria-labelledby="nav-dashboard-tab">

            <main class="main-content">
                <div class="container-fluid py-4">

                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                  <?php include 'orgDashBoxHTML/dashtop1.php'; ?>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                  <?php include 'orgDashBoxHTML/dashtop2.php'; ?>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                <div class="card-body p-3">
                                  <?php  include 'orgDashBoxHTML/dashtop3.php'; ?>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Approvals</p>
                                                <h5 class="font-weight-bolder">
                                                    1000
                                                </h5>
                                                <p class="mb-0">
                                                    <span class="text-danger text-sm font-weight-bolder">-10%</span>
                                                    than last month
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div>
                                                <span class="material-icons">check_box</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row mt-4">
                      <?php include 'orgDashBoxHTML/applicantDetail.php'; ?>
                        <div class="col-lg-5">
                            <!-- chart -->
                            <div class="card card-carousel overflow-hidden h-100 p-0">
                                <div id="piechart"></div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <div class="card ">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-2"><span class="material-icons inline_icon">info</span> Other Information</h6>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center ">
                                        <tbody>
                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div class="ms-4">
                                                            <p class="text-xs font-weight-bold mb-0">Applicant Type:</p>
                                                            <h6 class="text-sm mb-0">Elderly</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Applicants:</p>
                                                        <h6 class="text-sm mb-0">3000</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Involed Amount:</p>
                                                        <h6 class="text-sm mb-0">$430,900</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Approval Rate:</p>
                                                        <h6 class="text-sm mb-0">79.9%</h6>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div class="ms-4">
                                                            <p class="text-xs font-weight-bold mb-0">Applicant Type:</p>
                                                            <h6 class="text-sm mb-0">Low educated people</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Applicants:</p>
                                                        <h6 class="text-sm mb-0">1500</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Involed Amount:</p>
                                                        <h6 class="text-sm mb-0">$230,900</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Approval Rate:</p>
                                                        <h6 class="text-sm mb-0">70.9%</h6>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div class="ms-4">
                                                            <p class="text-xs font-weight-bold mb-0">Applicant Type:</p>
                                                            <h6 class="text-sm mb-0">New immigrants</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Applicants:</p>
                                                        <h6 class="text-sm mb-0">500</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Involed Amount:</p>
                                                        <h6 class="text-sm mb-0">$90,900</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Approval Rate:</p>
                                                        <h6 class="text-sm mb-0">69.9%</h6>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="w-30">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div class="ms-4">
                                                            <p class="text-xs font-weight-bold mb-0">Applicant Type:</p>
                                                            <h6 class="text-sm mb-0">Minorities</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Applicants:</p>
                                                        <h6 class="text-sm mb-0">500</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Involed Amount:</p>
                                                        <h6 class="text-sm mb-0">$90,900</h6>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Approval Rate:</p>
                                                        <h6 class="text-sm mb-0">59.9%</h6>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </main>

            <div class="text-center small bg-secondary theme-color8">- End of Report -</div>

        </div>


        <div class="tab-pane fade d-flex justify-content-center" id="nav-view" role="tabpanel"
            aria-labelledby="nav-view-tab">
            <!-- Add form view -->
            <div id="thisFormView"></div>
        </div>
    </div>











    <div class="addResponsiveHeight"></div>
    <div class="addResponsiveHeight"></div>

    <!-- footer -->
    <div class="theme-bg-color8 theme-color6 footerRadiusBorder addShadow">
        <small>
            <div class="px-4 py-3">
                <div class="row g-4 py-4 row-cols-1 row-cols-lg-2">
                    <div class="col d-flex justify-content-center">
                        <form>
                            <h5 class="pb-2 border-bottom"><b>Contact Us</b></h5>
                            <br>
                            <div class="row row-cols-2 d-flex justify-content-start">
                                <div class="col-4">
                                    <p><span class="material-icons inline_icon"
                                            style="vertical-align: top;">phone</span> Phone</p>
                                    <p><span class="material-icons inline_icon" style="vertical-align: top;">mail</span>
                                        Email</p>
                                </div>
                                <div class="col-5">
                                    <p>+852 0000 0000</p>
                                    <p>cs@xxxxxxxxx.com</p>
                                </div>
                            </div>
                            <small>Need service or support? Start your request now and we’ll find you a
                                solution.</small>
                        </form>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <form action="#" class="needs-validation">
                            <h5 class="pb-2 border-bottom"><b>Subscribe to our newsletter</b></h5>
                            <br>
                            <p>Monthly digest of whats new and exciting from us.</p>
                            <div class="row">
                                <div class="col">
                                    <input id="newsletter1" type="email" class="form-control dimmer addShadow"
                                        style="border-color: #d3ac9c; min-width: 20vw;" placeholder="Email address"
                                        required>
                                </div>
                                <div class="col">
                                    <button id="emailSubcribeBtn"
                                        class="btn btn-primary btn-smartform3 showSubscription" type="submit"><span
                                            class="material-icons inline_icon">send</span> Subscribe</button>
                                </div>
                            </div>
                            <small>We’ll never share your email address with a third-party. </small>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom theme-bg-color3 theme-color8 footerRadiusBorder">
                <div class="px-4 py-3">
                    <div class="row g-4 py-4 row-cols-2 row-cols-lg-3">
                        <div class="col">
                            <h5 class="title d-flex justify-content-center">Smart Form</h5>
                            <div class="py-4 d-flex justify-content-center">
                                <ul class="list-unstyled">
                                    <li> <a href="index.html">Index</a></li>
                                    <li> <a href="#">About Us</a></li>
                                    <li> <a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="title d-flex justify-content-center">Your Form</h5>
                            <div class="py-4 d-flex justify-content-center">
                                <ul class="list-unstyled">
                                    <li> <a href="overview.html">Overview</a></li>
                                    <li> <a href="createform.html">Create Form</a></li>
                                    <li> <a href="#">Guide</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="title d-flex justify-content-center">Account</h5>
                            <div class="py-4 d-flex justify-content-center">
                                <ul class="list-unstyled">
                                    <li> <a href="#">Profile</a></li>
                                    <li> <a href="signin.html">Sign In</a></li>
                                    <li> <a href="signup.html">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <hr>
                        <small>
                            <p>
                                <span class="text-muted">Copyright &copy;
                                    <script>document.write(new Date().getFullYear())</script> XXXXX XXXX Limited. All
                                    rights reserved.
                                </span>
                                <span class="addPaddingLeft">Privacy Policy - <a href="#"
                                        onclick="openNewWindow_tc();">Terms and Conditions</a></span>
                            </p>
                        </small>
                    </div>
                </div>
            </div>
        </small>
    </div>
    <!-- footer end -->
</body>

<!-- Add application row -->

<link rel="stylesheet" href="plugins/material-design-iconic-font/css/material-design-iconic-font.css">
<link rel="stylesheet" href="css/createform_form.css">
<script src="js/Sortable.js"></script>

</html>
