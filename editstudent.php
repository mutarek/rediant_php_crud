<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Students</h2>
    <?php 
    $studentid= $_GET['s_id'];
    $db = mysqli_connect("localhost","root","","rediant") or die(mysqli_error());
    $fetch_query1 = "SELECT * FROM student WHERE s_id =$studentid";

    $result1 = mysqli_query($db,$fetch_query1) or die(mysqli_error());
    if (mysqli_num_rows($result1) > 0) {
        while ($stdata = mysqli_fetch_assoc($result1)) {

    ?>
    <form class="post-form" action="functions/updatestudentdata.php" method="post">
        <div class="form-group">
            <label>Student Name</label>
            <input type="hidden" name="sid" value="<?php echo$stdata['s_id'] ?>" />
            <input type="text" name="sname" value="<?php echo$stdata['s_name'] ?>" />
        </div>
        <div class="form-group">
            <label>Student Number</label>
            <input type="number" name="snumber" value="<?php echo$stdata['s_number'] ?>"/>
        </div>
        <div class="form-group">
            <label>Select Course</label>
            <select name="s_course">
                <option value=""selected disabled>Select Course</option>
                <?php
                 $query = "SELECT * FROM course";
                 $courseresult = mysqli_query($db,$query) or die(mysqli_error());
                 if (mysqli_num_rows($courseresult) > 0) {
                    while ($coursedata = mysqli_fetch_assoc($courseresult)) {
                ?>
                <option value="<?php echo$coursedata['c_id']; ?>"><?php echo$coursedata['c_name']; ?></option>
            <?php } } ?>
            </select>
        </div>
        <input class="submit" type="submit" value="Update"  />
    </form>
<?php }  } ?>
</div>
</div>
<?php include 'footer.php'; ?>
