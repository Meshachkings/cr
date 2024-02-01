<?php
include "./partials/header.php";
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <!-- Add New Company Form -->
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add New Company</h4>
                            <form action="your_company_action_url" method="post">
                                <div class="form-group">
                                    <label for="company_name">Company Name</label>
                                    <input type="text" name="company_name" id="company_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="company_address">Company Address</label>
                                    <input type="text" name="company_address" id="company_address" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="company_email">Email</label>
                                    <input type="email" name="company_email" id="company_email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="company_username">Username</label>
                                    <input type="text" name="company_username" id="company_username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="company_password">Password</label>
                                    <input type="password" name="company_password" id="company_password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
    
                <!-- Companies Table -->
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Companies Table</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Company Name</th>
                                            <th>Company Address</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ABC Corp</td>
                                            <td>123 Main St, City</td>
                                            <td>abc@example.com</td>
                                            <td>abc_user</td>
                                            <td>********</td>
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