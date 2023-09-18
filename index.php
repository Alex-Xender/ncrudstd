<?php
include('db.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Crud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url(upload_images/images02.gif);">
    <!---Add in modal---->

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center><img src="https://codingcush.com/uploads/logo/logo_61b79976c34f5.png" width="300px" height="80px" alt=""></center>
                    <h4 class="modal-title text-center">New Registration Form</h4>
                </div>
                <div class="modal-body">
                    <form action="add.php" method="POST" enctype="multipart/form-data">
                        <!-- This is test for New Card Activate Form  -->
                        <!-- This is Address with email id  -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Student Roll N.</label>
                                <input type="text" class="form-control" name="card_no" placeholder="Enter 13-digit Student Id." maxlength="12" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Mobile No.</label>
                                <input type="phone" class="form-control" name="user_phone" placeholder="Enter 11-digit Mobile no." maxlength="10" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" name="user_first_name" placeholder="Enter First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" name="user_last_name" placeholder="Enter Last Name">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fathername">Father Name</label>
                                <input type="text" class="form-control" name="user_father" placeholder="Enter First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mothername">Guardian Name</label>
                                <input type="text" class="form-control" name="user_mother" placeholder="Enter Guradian's Name">
                            </div>
                        </div>

                        <div class="form-row" style="color: skyblue;">
                            <div class="form-group col-md-6">
                                <label for="email">Email Id</label>
                                <input type="email" class="form-control" name="user_email" placeholder="Enter Email id">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cnicno">Cnic No.</label>
                                <input type="text" class="form-control" name="user_cnic" maxlength="12" placeholder="Enter 13-digit Cnic no. ">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputState">Gender</label>
                                <select id="inputState" name="user_gender" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Date of Birth</label>
                                <input type="date" class="form-control" name="user_dob" placeholder="Date of Birth">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="family">Family Member's</label>
                            <textarea class="form-control" name="family" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" name="village" placeholder="Current Address">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Note.</label>
                            <input type="text" class="form-control" name="police_station" placeholder="Any Note Mention">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">District</label>
                                <input type="text" class="form-control" name="dist">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" name="pincode">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">Staff Id one who Activate New Registration.</label>
                            <input type="text" class="form-control" name="staff_id" maxlength="12" placeholder="Enter 13-digit Staff Id">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<script>
$().ready(function () {
    // Open the modal when the page loads
    $('#myModal').modal('show');
});
</script>

</body>
</html>
