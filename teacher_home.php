<?php
include("teacher_nav.php");
include("attendance_action.php");
?>

<div class="container mt-4">
    <button type="button" id="add_button" class="btn btn-info btn-lg">Add</button>
</div>

<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="css/datepicker.css" />


<div class="modal" id="formModal">
    <div class="modal-dialog">
        <form method="post" id="attendance_form" onsubmit="return validateInput()">
            <div class=" modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_title"></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <div class="form-group mb-4">
                        <div class="row">
                            <label class="col-md-4 text-right">Attendance Date <span class="text-danger">*</span></label>
                            <div class="col-md-8">
                                <input type="text" name="attendance_date" id="attendance_date" class="form-control" readonly />
                                <span id="error_attendance_date" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="student_details">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Present</th>
                                        <th>Absent</th>
                                    </tr>
                                </thead>
                                <?php
                                $query = "SELECT * FROM student";
                                $result = mysqli_query($con, $query);
                                foreach ($result as $student) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $student["studentName"]; ?>
                                            <input type="hidden" name="student_id[]" value="<?php echo $student["student_id"]; ?>" />
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="attendance_status<?php echo $student["student_id"]; ?>" value="Present" />
                                        </td>
                                        <td align="center">
                                            <input type="radio" name="attendance_status<?php echo $student["student_id"]; ?>" checked value="Absent" />
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <!-- <input type="hidden" name="attendance_id" id="attendance_id" />
                    <input type="hidden" name="action" id="action" value="Add" /> -->
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="button_action" id="button_action" class="btn btn-primary" value="Add" />
                </div>

            </div>
        </form>
    </div>
</div>
<script>
    $("#attendance_date").datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        container: "#formModal modal-body"
    });

    function clear_field() {
        //$('#attendance_form')[0].reset();
        document.getElementById("attendance_form").reset();
    }

    $('#add_button').click(function() {
        $('#modal_title').text("Add Attendance");
        //$('#button_action').val('Add');
        //$('#action').val('Add');
        $('#formModal').modal('show');
        clear_field();
    });

    function validateInput() {
        return true;
    }
</script>