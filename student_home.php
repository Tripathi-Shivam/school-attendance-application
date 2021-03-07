<?php
include("student_nav.php");
?>
<div class="container mt-4">
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Attendance Status</th>
                </tr>
            </thead>
            <?php
            $student_id = $_SESSION['student_id'];
            $query = "SELECT * FROM attendance WHERE student_id = $student_id";
            $result = mysqli_query($con, $query);
            $present = 0;
            $count = 0;
            if ($result != NULL) {
                foreach ($result as $student) {
                    if ($student["attendance_status"] == "Present") {
                        $present++;
                    }
                    $count++;
            ?>
                    <tr>
                        <td>
                            <?php echo $student["attendance_date"]; ?>
                        </td>
                        <td>
                            <?php echo $student["attendance_status"]; ?>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
        <h1>Total: <?php if ($count == 0) {
                        echo "";
                    } else {
                        echo $present / $count * 100 . "%";
                    }
                    ?>
        </h1>
    </div>
</div>
</form>
</div>