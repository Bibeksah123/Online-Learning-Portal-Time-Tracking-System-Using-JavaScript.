<?php
if(!isset($_SESSION)){
    session_start();
}
include('./admininclude/header.php');
include('../dbConnection.php');
if(isset($_SESSION['is_admin_login'])){
    $adminEmail=$_SESSION['adminLogEmail'];

} else{
    echo "<script> location.href='../index.php';</script>";
}

$adminEmail=$_SESSION['adminLogEmail'];
if(isset($_REQUEST['adminPassUpdatebtn'])){
    if(($_REQUEST['adminPass']=="")){
        // msg displayed if required filed missing
        $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All fileds </div>';
    } else{
        $sql="SELECT * FROM admin WHERE admin_email='$adminEmail'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $adminPass=$_REQUEST['adminPass'];
            $sql="UPDATE admin SET admin_pass='$adminPass' WHERE admin_email='$adminEmail'";
            if($conn->query($sql)==TRUE){
                // below msg display on form submit success..
                $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Update Successfully</div>';

            } else{
                // below msg display on form submit success..
                $passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unabel Update</div>';

            }
        }
    }
}
?>

<div class="col-sm-9 mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form  class="mt-5 mx-5">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" value="<?php echo $adminEmail?>"readonly>
                </div>
                <div class="form-group">
                    <label for="inputnewpassword">New Password</label>
                    <input type="text" class="form-control" id="inputnewpassword" placeholder="New Password" name="adminPass">
                </div>
                <button type="submit" class="btn btn-danger mr-4 mt-4" name="adminPassUpdatebtn">Update</button>
                <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <!-- <a href="students.php" class="btn btn-secondary">Close</a> -->
        <?php if(isset($passmsg)) {echo $passmsg;} ?>
            </form>
        </div>
    </div>
</div>

</div>  
<!-- div row close from header -->
</div>
<!-- div container-fluid close from header -->
<?php
include('./admininclude/footer.php');
?>