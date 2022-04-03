<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title></title>
</head>

<body>

    <table border="1" id="outer-table">
        <!-- append thing -->
    </table>
    <button id="add-section">Add Section</button>

    <!-- section with one question -->
    <script id="section" type="text/template">
    <tr>
        <td class="section-container">
            <table class="inner-table">
                <tr>
                    <td class="drag-handler"></td>
                    <td class="recipe-table__cell">
                        <select class="form-select form-select-sm form-row-h" aria-label=".form-select-sm example" id="{arraySelectID}" onchange="changeInput('{arraySelectID}', '{arrayInputID}')" required>
                            <option value="unSelect" selected>Question Types</option>
                            <option value="shortAns">Short Answer</option>
                            <option value="hkid">HKID</option>
                            <option value="yORn">Yes/No</option>
                        </select>
                    </td>
                    <td class="recipe-table__cell">
                        <input class="form-control form-control-sm form-row-h" type="text" placeholder="Question" aria-label=".form-control-sm example" required>
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
            <td class="drag-handler"></td>
            <td class="recipe-table__cell">
                <select class="form-select form-select-sm form-row-h" aria-label=".form-select-sm example" id="{arraySelectID}" onchange="changeInput('{arraySelectID}', '{arrayInputID}')" required>
                    <option value="unSelect" selected>Question Types</option>
                    <option value="shortAns">Short Answer</option>
                    <option value="hkid">HKID</option>
                    <option value="yORn">Yes/No</option>
                </select>
            </td>
            <td class="recipe-table__cell">
                <input class="form-control form-control-sm form-row-h" type="text" placeholder="Question" aria-label=".form-control-sm example" required>
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

    });
</script>