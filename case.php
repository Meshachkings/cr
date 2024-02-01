<?php
include "./partials/header.php";
?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <!-- Add New Case Form -->
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add New Case</h4>
                            <div id="alertContainer"></div>
                        <form id="addCaseForm" action="add_case.php" method="post">
                            <div class="form-group">
                                <label for="case_name">Case Name</label>
                                <input type="text" name="case_name" id="case_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="select_station">Select Station</label>
                                <select name="select_station" id="select_station" class="form-control"></select>
                            </div>
                            <div class="form-group">
                                <label for="case_status">Case Status</label>
                                <select name="case_status" id="case_status" class="form-control">
                                    <option value="pending">Pending</option>
                                    <option value="ongoing">Ongoing</option>
                                    <option value="closed">Closed</option>
                                    <!-- Add more statuses as needed -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="section_of_law">Section of Law</label>
                                <input type="text" name="section_of_law" id="section_of_law" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="incident_date">Incident Date</label>
                                <input type="date" name="incident_date" id="incident_date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="police_id">Police ID</label>
                                <input type="text" name="police_id" id="police_id" class="form-control">
                            </div>
                            <button type="button" class="btn btn-primary" onclick="addCase()">Add</button>
                        </form>

<!-- AJAX Script -->
                    <script>
                        function addCase() {
                            var formData = $('#addCaseForm').serialize();

                            $.ajax({
                                type: 'POST',
                                url: './scripts/add_case.php', // Replace with your PHP file handling case addition
                                data: formData,
                                dataType: 'json',
                                success: function(response) {
                                    // Handle the response from the server
                                    var alertContainer = $('#alertContainer');
                                    if (response.status === 'success') {
                                        alertContainer.html('<div class="alert alert-success" role="alert">' + response.message + '</div>');
                                        
                                        setTimeout(() => {
                                            window.location.href = '';
                                        }, 3000);
                                    } else {
                                        alertContainer.html('<div class="alert alert-danger" role="alert">' + response.message + '</div>');
                                    }
                                },
                                error: function(error) {
                                    // Handle errors
                                    console.log(error);
                                }
                            });
                        }

                            function fetchStations() {
                                $.ajax({
                                    type: 'GET',
                                    url: './scripts/get_stations.php', // Replace with your PHP file handling station retrieval
                                    success: function(response) {
                                        // Update the dropdown with the retrieved stations
                                        updateStationDropdown(response);
                                    },
                                    error: function(error) {
                                        // Handle errors
                                        console.log(error);
                                    }
                                });
                            }

                            // Function to update the station dropdown with data
                            function updateStationDropdown(stations) {
                                var selectStation = $('#select_station');
                                selectStation.empty(); // Clear existing options

                                // Iterate through each station and append a new option to the dropdown
                                $.each(stations, function(index, station) {
                                    var option = '<option value="' + station.station_id + '">' + station.station_name + '</option>';
                                    selectStation.append(option);
                                });
                            }

                            // Fetch stations when the page loads
                            $(document).ready(function() {
                                fetchStations();
                            });

                    </script>
                        </div>
                    </div>
                </div>
    
                <!-- Cases Table -->
                <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cases Table</h4>
                        <div class="table-responsive">
                            <table id="casesTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Case Name</th>
                                        <th>Select Station</th>
                                        <th>Case Status</th>
                                        <th>Section of Law</th>
                                        <th>Incident Date</th>
                                        <th>Description</th>
                                        <th>Police ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Case data will be dynamically added here using AJAX -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                // Function to fetch cases from the server and update the table
                $(document).ready(function () {
                function fetchCases() {
                    $.ajax({
                        type: 'GET',
                        url: './scripts/get_cases.php',
                        dataType:'json',
                        success: function(response) {
                            // Update the table with the retrieved cases
                            if (response.status === 'success') {
                                var tableBody = $('#casesTable tbody');
                                tableBody.empty();
                                
                                $.each(response.cases, function(index, caseData) {
                                    var row = '<tr>' +
                                        '<td>' + caseData.case_name + '</td>' +
                                        '<td>' + caseData.select_station + '</td>' +
                                        '<td>' + caseData.case_status + '</td>' +
                                        '<td>' + caseData.section_of_law + '</td>' +
                                        '<td>' + caseData.incident_date + '</td>' +
                                        '<td>' + caseData.description + '</td>' +
                                        '<td>' + caseData.police_id + '</td>' +
                                        '<td>' +
                                        '<a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>' +
                                        '<a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>' +
                                        '</td>' +
                                        '</tr>';
                                    tableBody.append(row);
                                });
                            } else {
                                console.log('Error fetching cases: ' + response.message);
                            }
                        },
                        error: function(error) {
                            // Handle errors
                            console.log('Error: ' + error.responseText);
                        }
                      
                    });
                }
                fetchCases();

            });

            </script>
            </div>
            <?php
    include "./partials/footer.php";
?>