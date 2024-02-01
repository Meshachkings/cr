<?php
include "./partials/header.php";
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <!-- Add New Verification Form -->
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">New Verification</h4>
                            <form action="your_verification_action_url" method="post">
                                <div class="form-group">
                                    <label for="verification_fields">Verification Fields</label>
                                    <input type="text" name="verification_fields" id="verification_fields" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="verification_firstname">First Name</label>
                                    <input type="text" name="verification_firstname" id="verification_firstname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="verification_lastname">Last Name</label>
                                    <input type="text" name="verification_lastname" id="verification_lastname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="verification_middlename">Middle Name</label>
                                    <input type="text" name="verification_middlename" id="verification_middlename" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="verification_dob">Date of Birth</label>
                                    <input type="date" name="verification_dob" id="verification_dob" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="verification_gender">Gender</label>
                                    <select name="verification_gender" id="verification_gender" class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="verification_lga">Local Government Area (LGA)</label>
                                    <input type="text" name="verification_lga" id="verification_lga" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Verify</button>
                            </form>
                        </div>
                    </div>
                </div>
    
                <!-- Verification Table -->
                <!-- Add your table code for displaying verification records here -->
    
            </div>
<?php
    include "./partials/footer.php";
?>