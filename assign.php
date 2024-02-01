<?php
include "./partials/header.php";
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <!-- Add New Task Form -->
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Assign Task</h4>
                            <form action="your_task_action_url" method="post">
                                <div class="form-group">
                                    <label for="select_case_id">Select Case ID</label>
                                    <select name="select_case_id" id="select_case_id" class="form-control">
                                        <option value="case_id_1">Case ID 1</option>
                                        <option value="case_id_2">Case ID 2</option>
                                        <!-- Add more case IDs as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="select_officer_id">Select Officer ID</label>
                                    <select name="select_officer_id" id="select_officer_id" class="form-control">
                                        <option value="officer_id_1">Officer ID 1</option>
                                        <option value="officer_id_2">Officer ID 2</option>
                                        <!-- Add more officer IDs as needed -->
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="task_status">Task Status</label>
                                    <select name="task_status" id="task_status" class="form-control">
                                        <option value="pending">Pending</option>
                                        <option value="assigned">Assigned</option>
                                        <option value="completed">Completed</option>
                                        <!-- Add more statuses as needed -->
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Assign</button>
                            </form>
                        </div>
                    </div>
                </div>
    
                <!-- Tasks Table -->
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tasks Table</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Case ID</th>
                                            <th>Officer ID</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Case ID 1</td>
                                            <td>Officer ID 1</td>
                                            <td>Assigned</td>
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