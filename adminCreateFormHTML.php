<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title></title>
</head>

<body>

    <center>
        <div class="inner">
            <div class="form-content">
                <div class="form-header">
                    <h3>Welfare Information</h3>
                </div>

                <div class="form-row">
                    <div class="col-1"></div>
                    <div class="col-2">
                        <p class="text-start form-color">*Name</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="form-holder">
                        <input type="text" id="serviceName" placeholder="Welfare Name" class="form-control form-color2" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-1"></div>
                    <div class="col-2">
                        <p class="text-start form-color">Introduction</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="form-holder">
                        <textarea name="" id="summary" placeholder="Summary 50 words" class="form-control form-color2" style="height: 100px; min-height:100px;" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-1"></div>
                    <div class="col-2">
                        <p class="text-start form-color">Target audiences</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="form-holder">
                        <input type="text" id="target" placeholder="Target audience" class="form-control form-color2" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-1"></div>
                    <div class="col-2">
                        <p class="text-start form-color">Age</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="form-holder">
                        <input type="number" min=0 id="age1" placeholder="From" class="form-control form-color2" required>
                        <input type="number" min=0 id="age2" placeholder="To" class="form-control form-color2" required>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-1"></div>
                    <label class="col-2 col-form-label form-color">Start Date</label>
                    <div class="col-3">
                        <input type="date" class="form-control form-color2" id="dateStart" style="width: 20vh;" required>
                    </div>
                    <label class="col-form-label"><small class="form-color">To</small></label>
                    <div class="col-1"></div>
                    <label class="col-2 col-form-label form-color">End Date</label>
                    <div class="col-3">
                        <input type="date" class="form-control form-color2" id="dateEnd" style="width: 20vh;" required>
                    </div>
                </div>

                <br>
                <div class="form-row">
                    <div class="col-1"></div>
                    <div class="col-2">
                        <p class="text-start form-color">The amount involved</p>
                    </div>
                    <div class="col-1"></div>
                    <div class="form-holder">
                        <input type="number" id="amountOfMoney" placeholder="HK$" class="form-control form-color2" required>
                    </div>
                </div>

            </div>
        </div>
    </center>

    <br />
    <hr />
    <br />

    <center>
        <table border="1" id="outer-table">
            <!-- append thing -->
        </table>
        <br />
        <button id="add-section">Add Section</button>
    </center>

    <br />
    <hr />
    <br />

    <center>
        <button id='btn_submit'>Submit</button>
    </center>

    <!-- section with one question -->
    <script id="section" type="text/template">
        <tr class="hi">
        <td class="section-container">
            <table class="inner-table">
                <tr>
                    <td>
                        <select class="select" required>
                            <option value="unSelect" selected>Question Types</option>
                            <option value="shortAns">Short Answer</option>
                            <option value="hkid">HKID</option>
                            <option value="engName">English Name</option>
                            <option value="chName">Chinese Name</option>
                            <option value="gender">Gender</option>
                            <option value="birthday">Birthday</option>
                            <option value="yORn">Yes/No</option>
                        </select>
                    </td>
                    <td class="recipe-table__cell_q">
                        <input class="q itself" type="text" placeholder="Question" aria-label=".form-control-sm example" required>
                    </td>
                    <td class="recipe-table__cell">
                        <textarea class="form-control form-control-sm" id="" rows="1" placeholder="Description (Optional)" style="min-height: 10vh;" required></textarea>
                    </td>
                    <td class="recipe-table__cell">
                        <div id="{arrayInputID}"></div>
                    </td>
                    <td class="recipe-table__cell">
                        <button class="remove-question">x</button>
                    </td>
                </tr>
            </table>
        </td>
        <td>
            <button class="add-q">Add Question</button>
        </td>
        <td>
            <button class="remove-section">remove section</button>
        </td>
    </tr>
    </script>

    <!-- the question only -->
    <script id="question" type="text/template">
        <table class="inner-table">
                <tr>
                    <td>
                        <select class="select" required>
                            <option value="unSelect" selected>Question Types</option>
                            <option value="shortAns">Short Answer</option>
                            <option value="hkid">HKID</option>
                            <option value="engName">English Name</option>
                            <option value="chName">Chinese Name</option>
                            <option value="gender">Gender</option>
                            <option value="birthday">Birthday</option>
                            <option value="yORn">Yes/No</option>
                        </select>
                    </td>
                    <td class="recipe-table__cell_q">
                        <input class="q itself" type="text" placeholder="Question" aria-label=".form-control-sm example" required>
                    </td>
                    <td class="recipe-table__cell">
                        <textarea class="form-control form-control-sm" id="" rows="1" placeholder="Description (Optional)" style="min-height: 10vh;" required></textarea>
                    </td>
                    <td class="recipe-table__cell">
                        <div id="{arrayInputID}"></div>
                    </td>
                    <td class="recipe-table__cell">
                        <button class="remove-question">x</button>
                    </td>
                </tr>
            </table>
    </script>

</body>

</html>

<script>
    //add question to section
    $(document).on('click', '.add-q', function() {
        $(this).parents().siblings(".section-container").append($("#question").html());
    });

    //remove question
    $(document).on('click', '.remove-question', function() {
        $(this).parents('.inner-table').remove();
    });

    //remove section
    $(document).on('click', '.remove-section', function() {
        $(this).parent().parent().remove();
    });

    $(document).ready(function() {
        $("#outer-table").append($("#section").html());

        $("#add-section").click(function() {
            $("#outer-table").append($("#section").html());
        });

        $("#btn_submit").click(function() {
            passToAjax();
        });

    });

    function passToAjax() {

        if (!$('#serviceName').val()) {
            alert("please input welfare name.");
        } else {

            var tmp_serviceName = $('#serviceName').val();
            var tmp_summary = $('#summary').val();
            var tmp_target = $('#target').val();
            var tmp_age_from = $('#age1').val();
            var tmp_age_to = $('#age2').val();
            var tmp_dateStart = $('#dateStart').val();
            var tmp_dateEnd = $('#dateEnd').val();
            var tmp_money = $('#amountOfMoney').val();

            var unSelectType = false;
            var notQuestion = false;

            //check input
            $('#outer-table').children().each(function(index) {

                $('#outer-table').children().eq(index).children().children().children().each(function(index) {

                    var tmp_question_index = index + 1;
                    var tmp_question_type = $(this).children().children().eq(0).children().val();
                    var tmp_question_itself = $(this).children().children().eq(1).children().val();
                    var tmp_question_description = $(this).children().children().eq(2).children().val();

                    if (!tmp_question_type || tmp_question_type == "unSelect") {
                        unSelectType = true;
                    } else {
                        if(tmp_question_type != "hkid" 
                        || tmp_question_type != "engName"
                        || tmp_question_type != "chName"
                        || tmp_question_type != "gender"
                        || tmp_question_type != "birthday"){
                            if(!tmp_question_itself){
                                notQuestion = true;
                            }
                        }
                    }
                });
            });

            if (unSelectType) {
                alert("your have unselect question type.");
            }else if(notQuestion){
                alert("your have empty question.");
            } else {

                var sessionArray = new Array();

                $('#outer-table').children().each(function(index) {

                    var questionArray = new Array();

                    $('#outer-table').children().eq(index).children().children().children().each(function(index) {

                        var tmp_question_index = index + 1;
                        var tmp_question_type = $(this).children().children().eq(0).children().val();
                        var tmp_question_itself = $(this).children().children().eq(1).children().val();
                        var tmp_question_description = $(this).children().children().eq(2).children().val();

                        var jsonArg = {
                            question_index: tmp_question_index,
                            question_type: tmp_question_type,
                            question_self: tmp_question_itself,
                            question_description: tmp_question_description
                        };

                        questionArray.push(jsonArg);

                    });

                    var json_Q_array = questionArray;

                    sessionArray.push(json_Q_array);

                });

                JSON.stringify(sessionArray)

                var passData = {
                    serviceName: tmp_serviceName,
                    summary: tmp_summary,
                    target: tmp_target,
                    age_from: tmp_age_from,
                    age_to: tmp_age_to,
                    dateStart: tmp_dateStart,
                    dateEnd: tmp_dateEnd,
                    money: tmp_money,
                    sessionList: sessionArray
                };

                $.ajax({
                    type: "POST",
                    url: 'adminCreateform.php',
                    datatype: 'json',
                    data: passData,
                    cache: false,
                    success: function(data) {
                        alert(data);
                    }
                });

            }

        }
    }
</script>