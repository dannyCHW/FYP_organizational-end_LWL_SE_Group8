<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'format/HTMLheader.php'; ?>

  <script>
    $(document).ready(function() {
      $("#btnCreateForm").click(function() {

        window.location.href = "org_createformHTML.php";

      });

      $("form").submit(function(e){

          var eventId = $(this).find("[id='btnSub']").val();

          $.ajax({
            type: "POST",
            url:"orgSelectEvent.php",
            data:{'eventId':eventId},
            success:function(result){
              window.location.href = "orgEventDashHTML.php";
          }});

      });

      $("#btnReport").click(function(){


        $.ajax({
          type: "POST",
          url:"generateMonthReport.php",
          success:function(result){
            window.location.href = "orgLobbyHTML.php";
            alert("The month KPI report has been generate, please check your folder. It named by XXMonthReport");

        }});

      });

    });

  </script>

</head>
<style>
  .column {
    float: left;
    width: 50%;
  }
</style>

<body style="background-color: #eee8e5;">
  <?php include 'checkSession/orgUserCheckSession.php'; ?>
  <?php include 'format/orgTopBar.php'; ?>
  <!-- nav end -->

  <!-- main body -->
  <main>
    <div class="center">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1>Get started</h1>
            <p class="fs-5 col-md-8">Quickly and easily get started with Smart Form.</p>
            <div class="mb-5">
              <a id="btnCreateForm" class="btn btn-primary btn-lg px-4" style="background-color: #987468;">Create
                Your
                Welfare</a>
            </div>
            <p class="fs-5 col-md-8">Generate Month KPI Report</p>
            <div class="mb-5">
              <a id="btnReport" class="btn btn-primary btn-lg px-4" style="background-color: #987468;">
                Generate Month Report
              </a>
            </div>
          </div>
          <div class="col">
            <img src="img/typewriter.svg" alt="" height="250vw">
          </div>
        </div>
      </div>

      <hr class="col-3 col-md-2 mb-5">


      <div class="container">

        <?php include 'loopActivity.php'; ?>

      </div>
    </div>


    </div>
  </main>
  <!-- main body end -->

  <!-- footer -->
  <!-- footer end -->

</body>

<link rel="stylesheet" href="css/main.css">
<script src="js/main.js"></script>

</html>
<script>
  $('.uploadImg').on('click', function(e){
    //alert($(this).siblings("#serviceID").html());
        window.location.href = "uploadFormImgHTML.php?serviceID=" + $(this).siblings("#serviceID").html()
                                                     + "&oldImg=" + $(this).siblings("#imgName").html();
  });
  // $(document).ready(function() {
  //   $("#uploadImg").click(function() {
  //     alert($(this).siblings("#serviceID").html());
  //     // window.location.href = "uploadFormImgHTML.php?serviceID=" + $(this).siblings("#serviceID").html()
  //     //                                              + "&oldImg=" + $(this).siblings("#imgName").html();
  //   });
  // });
</script>
