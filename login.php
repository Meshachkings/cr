<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Crime management system</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <div id="alertContainer"></div>
              <form id="loginForm" class="pt-3">
                <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="username" placeholder="Username | police ID">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                    <!-- Trigger the AJAX login function -->
                    <button type="button" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" onclick="loginUser()">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <label class="form-check-label text-muted">
                            <input type="checkbox" class="form-check-input" name="keepSignedIn">
                            Keep me signed in
                        </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>

                <div class="text-center mt-4 font-weight-light">
                    Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
            </form>


            <script>
                  function loginUser() {
                      var formData = $('#loginForm').serialize();

                      $.ajax({
                          type: 'POST',
                          url: './scripts/login.php',
                          data: formData,
                          dataType: 'json',
                          success: function(response) {
                              // Handle the response from the server
                              console.log(response)
                              var alertContainer = $('#alertContainer');
                              if (response.status === 'success') {
                                  alertContainer.html('<div class="alert alert-success" role="alert">' + response.message + '</div>');
                                  
                                  setTimeout(() => {
                                    window.location.href = './index.php';
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
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
