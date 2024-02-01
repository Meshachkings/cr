<?php
include "./partials/header.php";
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <!-- Add New Station Form -->

            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add New Station</h4>
                        <form id="addStationForm" action="add_station.php" method="post">
                            <div class="form-group">
                                <label for="station_name">Station Name</label>
                                <input type="text" name="station_name" id="station_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" id="state" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lga">LGA</label>
                                <input type="text" name="lga" id="lga" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            <button type="button" class="btn btn-primary" onclick="addStation()">Add</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- AJAX Script -->
            <script>
                function addStation() {
                    var formData = $('#addStationForm').serialize();

                    $.ajax({
                        type: 'POST',
                        url: 'add_station.php', // Replace with your PHP file handling station addition
                        data: formData,
                        success: function(response) {
                            // Handle the response from the server
                            console.log(response);
                        },
                        error: function(error) {
                            // Handle errors
                            console.log(error);
                        }
                    });
                }
            </script>

    
                <!-- Stations Table -->
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Stations Table</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Station Name</th>
                                            <th>State</th>
                                            <th>LGA</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Station A</td>
                                            <td>State A</td>
                                            <td>LGA A</td>
                                            <td>Address A</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Station A</td>
                                            <td>State A</td>
                                            <td>LGA A</td>
                                            <td>Address A</td>
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