<?php

require_once("config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajas Class</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <h2>Add Data</h2>
    <button type="button" id="dbData">Add</button>
    <br><br>
    <label>search :</label>
    <input type="search" name="search" id="search">


    <form id="insertData" style="display:none;">
        <input type="hidden" name="edit_id" id="edit_id">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Marks:</td>
                <td><input type="number" name="marks" id="marks"></td>
            </tr>
            <tr>
                <td>Grade:</td>
                <td><input type="text" name="grade" id="grade"></td>
            </tr>
            <tr>
                <td>City:</td>
                <td><input type="text" name="city" id="city"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save" id="save"></td>
            </tr>
        </table>
    </form>
    <br>

    <div id="table_form"></div>


    <script>
        $(document).ready(function () {

            $("#dbData").click(function () {
                $("#insertData").show();
            });
            // $("#insertData #remove").click(function () {
            //     $("#insertData").hide();
            // });

            $("body").delegate(".pages", "click", function () {
                pageno = $(this).attr('page-no');
                getData(pageno);
            });

            // get data from database
            function getData(page = 1) {
                var search_data = $("#search").val();
                $.ajax({
                    url: 'get.php',
                    method: 'GET',
                    data: { 'searchdata': search_data, page: page },
                    success: function (response) {
                        $("#table_form").html(response);
                        $('a[page-no="' + page + '"]').addClass('active');
                    },
                    error: function (er) {
                        alert(er);
                    }
                });
            }
            getData();

            $("#search").keyup(function () {
                getData();
            });


            // insert data 
            $("#insertData").submit(function (e) {
                e.preventDefault();
                formData = $(this).serializeArray();
                $.ajax({
                    url: 'save.php',
                    method: 'POST',
                    data: formData,
                    success: function (response) {
                        $("#insertData").trigger("reset");
                        getData();
                        $("#insertData").hide();
                    },
                    error: function (e) {
                        console.log(e);
                    }
                });
            });

            // for delete data 
            $("body").delegate("#deleteBtn", "click", function () {
                sid = $(this).attr('data-id');
                $.ajax({
                    url: 'delete.php',
                    type: 'GET',
                    data: { "school_id": sid },
                    success: function (result) {
                        getData();
                    },
                    error: function (er) {
                        alert(er);
                    }
                });
            });

            //edit data

            $("body").delegate("#editBtn", "click", function () {
                eid = $(this).attr('data-edit-id');
                $.ajax({
                    url: 'edit.php',
                    type: 'GET',
                    data: { 'sch_id': eid },
                    success: function (st) {
                        student = JSON.parse(st);
                        //alert(student.id);
                        $('#name').val(student.name);
                        $('#marks').val(student.marks);
                        $('#grade').val(student.grade);
                        $('#city').val(student.city);
                        $('#edit_id').val(student.id);
                        $("#insertData").show();
                    }
                });

            });


        });
    </script>

</body>

</html>
<style>
	.pagination {
		display: inline-block;
	}

	.pagination a {
		color: black;
		float: left;
		padding: 8px 16px;
		text-decoration: none;
	}

	.pagination a.active {
		background-color: #4CAF50;
		color: white;
	}

	.pagination a:hover:not(.active) {
		background-color: #ddd;
	}
</style>