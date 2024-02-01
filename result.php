<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criminal Record</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .criminal-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="mt-5 mb-4">Criminal Record</h1>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="criminal_image.jpeg" alt="Criminal Image" class="criminal-image img-fluid">
                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">First Name</th>
                                    <td>John</td>
                                </tr>
                                <tr>
                                    <th scope="row">Last Name</th>
                                    <td>Doe</td>
                                </tr>
                                <tr>
                                    <th scope="row">Date of Birth</th>
                                    <td>1990-01-01</td>
                                </tr>
                                <tr>
                                    <th scope="row">Gender</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th scope="row">Address</th>
                                    <td>123 Main St, City</td>
                                </tr>
                                <tr>
                                    <th scope="row">State of Origin</th>
                                    <td>State</td>
                                </tr>
                                <tr>
                                    <th scope="row">LGA</th>
                                    <td>Local Government Area</td>
                                </tr>
                                <tr>
                                    <th scope="row">Crimes</th>
                                    <td>
                                        <ul>
                                            <li>Crime 1: Description of crime 1</li>
                                            <li>Crime 2: Description of crime 2</li>
                                            <!-- Add more crimes as needed -->
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Status</th>
                                    <td>In Custody</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
