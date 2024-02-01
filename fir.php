<?php
include "./partials/header.php";
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <!-- Add New Incident Form -->
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add New Incident</h4>
                            <form action="your_incident_action_url" method="post">
                                <div class="form-group">
                                    <label for="officer_id">Officer ID</label>
                                    <input type="text" name="officer_id" id="officer_id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="station_id">Station ID</label>
                                    <input type="text" name="station_id" id="station_id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="incident_name">Name</label>
                                    <input type="text" name="incident_name" id="incident_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="incident_date">Incident Date</label>
                                    <input type="date" name="incident_date" id="incident_date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="incident_time">Incident Time</label>
                                    <input type="time" name="incident_time" id="incident_time" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="incident_description">Description</label>
                                    <textarea name="incident_description" id="incident_description" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="incident_status">Status</label>
                                    <select name="incident_status" id="incident_status" class="form-control">
                                        <option value="pending">Pending</option>
                                        <option value="ongoing">Ongoing</option>
                                        <option value="closed">Closed</option>
                                        <!-- Add more statuses as needed -->
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
    
                <!-- Incidents Table -->
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Incidents Table</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Officer ID</th>
                                            <th>Station ID</th>
                                            <th>Name</th>
                                            <th>Incident Date</th>
                                            <th>Incident Time</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>123</td>
                                            <td>456</td>
                                            <td>Incident A</td>
                                            <td>2022-01-01</td>
                                            <td>12:00 PM</td>
                                            <td>Description of the incident...</td>
                                            <td>Pending</td>
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