<?php
include "./partials/header.php";
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <!-- Add New Criminal Form -->
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add New Criminal</h4>
                            <form action="your_criminal_action_url" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="criminal_first_name">First Name</label>
                                    <input type="text" name="criminal_first_name" id="criminal_first_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="criminal_last_name">Last Name</label>
                                    <input type="text" name="criminal_last_name" id="criminal_last_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="criminal_middle_name">Middle Name</label>
                                    <input type="text" name="criminal_middle_name" id="criminal_middle_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="criminal_image">Image</label>
                                    <input type="file" name="criminal_image" id="criminal_image" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label for="criminal_dob">Date of Birth</label>
                                    <input type="date" name="criminal_dob" id="criminal_dob" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="criminal_gender">Gender</label>
                                    <select name="criminal_gender" id="criminal_gender" class="form-control">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="criminal_address">Address</label>
                                    <input type="text" name="criminal_address" id="criminal_address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="criminal_state_of_origin">State of Origin</label>
                                    <input type="text" name="criminal_state_of_origin" id="criminal_state_of_origin" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="criminal_lga">Local Government Area (LGA)</label>
                                    <input type="text" name="criminal_lga" id="criminal_lga" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
    
                <!-- Criminals Table -->
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Criminals Table</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Middle Name</th>
                                            <th>Image</th>
                                            <th>DOB</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>State of Origin</th>
                                            <th>LGA</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>Smith</td>
                                            <td><img src="criminal_image.jpeg" alt="Criminal Image" width="50px"></td>
                                            <td>1990-01-01</td>
                                            <td>Male</td>
                                            <td>123 Main St, City</td>
                                            <td>New York</td>
                                            <td>New York City</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <?php
    include "./partials/footer.php";
?>