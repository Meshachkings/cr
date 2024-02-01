<?php
include "./partials/header.php";
?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <!-- Add New User Form -->
                <!-- Include jQuery library -->

<!-- Your HTML form -->
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New User</h4>
                    <div id="alertContainer"></div>
                    <form id="addUserForm" action="add_user.php" method="post">
                        <div class="form-group">
                            <label for="user_name">Name</label>
                            <input type="text" name="user_name" id="user_name" class="form-control">
                        </div>
                        <input hidden type="text" name="state" id="state" class="form-control" value = "<?php echo $_SESSION["state"];?>">

                        <div class="form-group">
                            <label for="user_type">Type of User</label>
                            <select name="user_type" id="user_type" class="form-control">
                                <option value="Level 1">Level 1</option>
                                <option value="Level 2">Level 2</option>
                                <option value="Level 3">Level 3</option>
                                <option value="Level 4">Level 4</option>
                                <option value="Level 5">Level 5</option>
                                <option value="Company">Company</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="police_id">Police ID</label>
                            <input type="text" name="police_id" id="police_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="user_password">Password</label>
                            <input type="password" name="user_password" id="user_password" class="form-control">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="addUser()">Add</button>
                    </form>
                </div>
            </div>
        </div>

            <!-- AJAX Script -->
            <script>
              function addUser() {
                  var formData = $('#addUserForm').serialize();

                  $.ajax({
                      type: 'POST',
                      url: './scripts/add_user.php', // Replace with your PHP file handling registration
                      data: formData,
                      dataType: 'json',
                      success: function(response) {
                          // Handle the response from the server
                          console.log(response)
                          var alertContainer = $('#alertContainer');
                          if (response.status === 'success') {
                              alertContainer.html('<div class="alert alert-success" role="alert">' + response.message + '</div>');

                              setTimeout(function () {
                                window.location.href = '';               
                                }, 3000);
                          } else {
                              alertContainer.html('<div class="alert alert-danger" role="alert">' + response.message + '</div>');
                          }
                      },
                      error: function(error) {
                          // Handle errors
                          console.log(error);
                          var alertContainer = $('#alertContainer');
                          alertContainer.html('<div class="alert alert-danger" role="alert">Error occurred while processing the request.</div>');
                      }
                  });
              }
          </script>
    
                <!-- Users Table -->
                <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Users Table</h4>
                        <div class="table-responsive">
                            <table class="table table-hover" id="usersTable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Type of User</th>
                                        <th>Police ID</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table rows will be dynamically added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    // Function to fetch users from the server and populate the table
                    function fetchUsers() {
                        $.ajax({
                            type: 'GET',
                            url: './scripts/get_users.php',
                            dataType: 'json',
                            success: function (response) {
                                console.log(response.status);
                                if (response.status === 'success') {
                                    // Clear existing table rows
                                    $('#usersTable tbody').empty();

                                    // Append new rows based on the fetched users
                                    $.each(response.users, function (index, user) {
                                        var name = user.name || 'admin';
                                        var row = '<tr>' +
                                            '<td>' + name + '</td>' +
                                            '<td>' + user.user_type + '</td>' +
                                            '<td>' + user.username + '</td>' +
                                            '<td>********</td>' +
                                            '<td>' +
                                            '<a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>' +
                                            '<a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>' +
                                            '</td>' +
                                            '</tr>';
                                        $('#usersTable tbody').append(row);
                                    });
                                } else {
                                    console.log('Error fetching users: ' + response.message);
                                }
                            },
                            error: function (error) {
                                console.log('Error: ' + error.responseText);
                            }
                        });
                    }

                    // Call the fetchUsers function on page load
                    fetchUsers();
                });

                </script>
    
<?php
    include "./partials/footer.php";
?>

