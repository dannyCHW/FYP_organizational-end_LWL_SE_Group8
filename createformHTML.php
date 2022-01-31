<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Form - Form</title>
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.ico" />
    <script src="plugins/jquery-3.3.1-dist/jquery.min.js"></script>
    <script src="plugins/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="plugins/bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>

<body style="background-color: #eee8e5;">

    <?php require_once 'header.html'; ?>

    <div class="wrapper">
        <form id="wizard" action="javascript:finlishSubmit();" method="" class="was-validated">

            <!-- SECTION 1 -->
            <h2></h2>
            <br>
            <section>
                <div class="inner">
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Welfare Information</h3>
                        </div>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <p class="fw-lighter small">* Must be filled</p>
                        </div>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <p class="fw-lighter small">^ Optional</p>
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
                                <p class="text-start form-color">*Introduction</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <textarea name="" id="summary" placeholder="Summary 50 words" class="form-control form-color2" style="height: 100px; min-height:100px;" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2">
                                <p class="text-start form-color">*Target audiences</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <input type="text" id="target" placeholder="Target audience" class="form-control form-color2" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2">
                                <p class="text-start form-color">Age limit</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <input type="number" min=0 id="age" placeholder="age" class="form-control form-color2" required>
                                <input type="radio" id="ageAfter" name="age" value="or after">
                                <label for="age1">or after</label><br>
                                <input type="radio" id="ageBelow" name="age" value="or under">
                                <label for="age2">or under</label>
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
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-2">
                                <p class="text-start form-color">*Privacy Policy & Disclaimer</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="form-holder">
                                <textarea name="" id="terms" class="form-control form-color2" style="height: 100px; min-height:100px;" required></textarea>
                            </div>
                        </div>

                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <label class="col-2 col-form-label form-color">^Attachment<br>
                                <p class="fw-lighter">Promotional Materials</p>
                            </label>
                            <div class="form-holder">
                                <div class="input-group" style="min-width: 20vw;">
                                    <input type="file" class="form-control form-color2" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" accept=".jpg, .jpeg, .png, .tiff, .svg" required>
                                    <!-- <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button> -->
                                </div>
                                <br><br><small><b>Acceptable file format:</b><br>&nbsp;&nbsp;jpg, jpeg, png, tiff,
                                    svg<br><b>File size:</b><br>&nbsp;&nbsp;&lt;10MB<br><b>For a Portrait Poster
                                        Size:</b><br>&nbsp;&nbsp;A4 size in pixels 300dpi: 3508 x 2480
                                    px (without bleed area)<br><b>For a Landscape Banner
                                        Size:</b><br>&nbsp;&nbsp;3508 x 1240 px (without bleed area)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION 2 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Question Setting</h3>
                        </div>
                        <div class="badge bg-primary text-wrap text-start">
                            <h6>Please set up within 20 questions (multiple choice questions are preferred) to reduce
                                the difficulty of filling in the form for the elderly and low-educated
                            </h6>
                        </div>
                        <p class="fw-lighter">*If you choose multiple choice/option question, then set the options in
                            the array, </p>
                        <p class="fw-lighter">e.g. Living with family, Property with mortgage, Property without
                            mortgage, Rental apartment, Public housing</p>
                        <div class="recipe">
                            <!-- <div class="recipe__info">
                                <h2 class="recipe__title">Banana muffins recipe</h2>
                            </div> -->

                            <div class="d-flex justify-content-center">
                                <div class="recipe__ingredients">
                                    <table cellpadding="0" cellspacing="0" class="recipe-table" id="recipeTable">
                                        <tbody id="recipeTableBody">

                                            <!-- append the question-->

                                        </tbody>
                                    </table>
                                    <div class="recipe-table__add-row">
                                        <span class="recipe-table__add-row-btn"><br><b>+</b></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- addRow -->
            <script id="rowTemplate" type="text/template">
                <tr>
                    <td class="drag-handler"></td>
                    <td class="recipe-table__cell">
                        <select class="form-select form-select-sm form-row-h"
                            aria-label=".form-select-sm example" id="{arraySelectID}"
                            onchange="changeInput('{arraySelectID}', '{arrayInputID}')"  required>
                            <option value="unSelect" selected>Question Types</option>
                            <option value="shortAns">Short Answer</option>
                            <option value="hkid">HKID/Passport Number</option>
                            <option value="yORn">Yes/No</option>
                            <option value="mc">Multiple Choice</option>

                        </select>
                    </td>
                    <td class="recipe-table__cell">
                        <input class="form-control form-control-sm form-row-h" type="text"
                            placeholder="Question" aria-label=".form-control-sm example"
                             required>
                    </td>
                    <td class="recipe-table__cell">
                        <textarea class="form-control form-control-sm" id="" rows="1"
                            placeholder="Description (Optional)" style="min-height: 10vh;" required></textarea>
                    </td>
                    <td class="recipe-table__cell">
                        <div id="{arrayInputID}"></div>
                    </td>
                    <td class="recipe-table__cell">
                        <button class="recipe-table__del-row-btn form-row-h" >x</button>
                    </td>
                </tr>
            </script>

            <!-- addInput -->
            <script id="addInput" type="text/template">
                <input class="form-control form-control-sm form-row-h" list="datalistOptions"
                    id="{arrayInputChild}" placeholder="Array" required>
                    <datalist id="datalistOptions">
                    <option value="Living with family, Property with mortgage, Property without
                    mortgage, Rental apartment, Public housing">
                    <option value="18-29, 30-49, 50-64">
                    <option
                        value="HK$0-10,000, HK$10,001-30,000, HK$30,001-70,000, HK$70,001 or above">
                    </datalist>
            </script>
        </form>
    </div>

</body>

<script>
    //originated from createform.js---- {

    $(function() {
        $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "fade",
            enableAllSteps: true,
            transitionEffectSpeed: 500,

            labels: {
                finish: "Submit",
                next: "Forward",
                previous: "Backward"
            }
        });
        $('.wizard > .steps li a').click(function() {
            $(this).parent().addClass('checked');
            $(this).parent().prevAll().addClass('checked');
            $(this).parent().nextAll().removeClass('checked');
        });

        // Custome Jquery Step Button
        $('.forward').click(function() {
            $("#wizard").steps('next');
        });

        $('.backward').click(function() {
            $("#wizard").steps('previous');
        });
    });


    function changeInput(select_val, input_id) {
        var obj = document.createElement('div');
        var e = document.getElementById(select_val);
        var strUser = e.options[e.selectedIndex].value;
        if (strUser === '0' || strUser === '3') {
            var obj2 = document.getElementById(input_id + 'child');
            if (obj2 == null) {
                obj.innerHTML = document.getElementById('addInput').innerHTML
                    .replace(/{arrayInputChild}/g, input_id + 'child');
                document.getElementById(input_id).appendChild(obj);
            }
        } else {
            document.getElementById(input_id + 'child').remove();
        }
    }

    //originated from createform.js---- }

    function finlishSubmit() {
        $('#wizard').attr('action', 'javascript:sending();');

        var questionArray = new Array();
        var haveUnselectQuestionType = false;
        var haveNull = false;

        //check for empty required field
        if(!$('#serviceName').val() || 
        !$('#summary').val() ||
        !$('#target').val() ||
        !$('#terms').val()){
            haveNull = true;
        }

        $("#recipeTableBody").children().each(function(index) {
            if ($(this).children().siblings().eq(1).children().val() == 'unSelect') {
                haveUnselectQuestionType = true;
            }
        });

        //check bool flags
        if (haveUnselectQuestionType) {
            alert('one or more qeustion type haven\'t been selected.');
        }else if(haveNull){
            alert('one or more required field is empty.');
        } else {
            //extarct the data

            var tmp_serviceName = $('#serviceName').val();
            var tmp_summary = $('#summary').val();
            var tmp_target = $('#target').val();
            var tmp_age = $('#age').val();
            var tmp_ageUpDown = '';
            if ($('#ageAfter').is(':checked')) {
                tmp_ageUpDown = $('#ageAfter').val();
            } else if ($('#ageBelow').is(':checked')) {
                tmp_ageUpDown = $('#ageBelow').val();
            } else {}
            var tmp_dateStart = $('#dateStart').val();
            var tmp_dateEnd = $('#dateEnd').val();
            var tmp_money = $('#amountOfMoney').val();
            var tmp_terms = $('#terms').val();

            $("#recipeTableBody").children().each(function(index) {

                //question index
                var tmp_question_index = index + 1;
                //question type
                var tmp_question_type = $(this).children().siblings().eq(1).children().val();
                //question itself
                var tmp_question_itself = $(this).children().siblings().eq(2).children().val();
                //question description
                var tmp_question_description = $(this).children().siblings().eq(3).children().val();

                var jsonArg = {
                    question_index: tmp_question_index,
                    question_type: tmp_question_type,
                    question_self: tmp_question_itself,
                    question_description: tmp_question_description
                };

                questionArray.push(jsonArg);
            });


            JSON.stringify(questionArray);

            var passData = {
                serviceName: tmp_serviceName,
                summary: tmp_summary,
                target: tmp_target,
                age: tmp_age,
                ageUpDown: tmp_ageUpDown,
                dateStart: tmp_dateStart,
                dateEnd: tmp_dateEnd,
                money: tmp_money,
                terms: tmp_terms,
                questionList: questionArray
            };

            $.ajax({
                type: "POST",
                url: 'createform.php',
                datatype: 'json',
                data: passData,
                cache: false,
                success: function(data) {
                    alert(data);
                }
            });

        }
    }

    function sending(){
        alert('pls wait for a second');
    }


    $(document).ready(function() {

        $('#recipeTableBody').append($('#rowTemplate').html());

        $('.recipe-table__add-row-btn').click(function() {
            $('#recipeTableBody').append($('#rowTemplate').html());
        });



        //originated from createform.js---- {
        var $tableBody = $('#recipeTableBody');
        var $menu = $('#menu');
        $(document).on('click', '.recipe-table__add-row-btn', function(e) {
            var $el = $(e.currentTarget);
            var htmlString = $('#rowTemplate').html()
                .replace(/{arraySelectID}/g, 'arraySelect' + i)
                .replace(/{arrayInputID}/g, 'arrayInput' + i);
            $tableBody.append(htmlString);
            return false;
        });

        $tableBody.on('click', '.recipe-table__del-row-btn', function(e) {
            $tmpCount = $('#recipeTableBody').children().length;
            if ($tmpCount <= 1) {
                alert("There is only one left.");
            } else {
                var $el = $(e.currentTarget);
                var $row = $el.closest('tr');
                $row.remove();
                return false;
            }
        });

        Sortable.create(
            $tableBody[0], {
                animation: 150,
                scroll: true,
                handle: '.drag-handler',
                onEnd: function() {
                    console.log('Type something here...');
                }
            }
        );
        //originated from createform.js---- }

    });
</script>

</html>