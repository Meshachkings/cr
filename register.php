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
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
             <!-- Include jQuery library -->
             <div id="alertContainer"></div>
          <form id="registrationForm" class="pt-3">
              <!-- Other form fields... -->
              <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" name="username" placeholder="Username | Police ID">
              </div>
              <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" placeholder="Email">
              </div>
              <div class="form-group">
              <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="state">
                <option value="" disabled selected>Choose a State</option>
                <option value="Abia">Abia</option>
                <option value="Adamawa">Adamawa</option>
                <option value="Akwa Ibom">Akwa Ibom</option>
                <option value="Anambra">Anambra</option>
                <option value="Bauchi">Bauchi</option>
                <option value="Bayelsa">Bayelsa</option>
                <option value="Benue">Benue</option>
                <option value="Borno">Borno</option>
                <option value="Cross River">Cross River</option>
                <option value="Delta">Delta</option>
                <option value="Ebonyi">Ebonyi</option>
                <option value="Edo">Edo</option>
                <option value="Ekiti">Ekiti</option>
                <option value="Enugu">Enugu</option>
                <option value="Gombe">Gombe</option>
                <option value="Imo">Imo</option>
                <option value="Jigawa">Jigawa</option>
                <option value="Kaduna">Kaduna</option>
                <option value="Kano">Kano</option>
                <option value="Katsina">Katsina</option>
                <option value="Kebbi">Kebbi</option>
                <option value="Kogi">Kogi</option>
                <option value="Kwara">Kwara</option>
                <option value="Lagos">Lagos</option>
                <option value="Nasarawa">Nasarawa</option>
                <option value="Niger">Niger</option>
                <option value="Ogun">Ogun</option>
                <option value="Ondo">Ondo</option>
                <option value="Osun">Osun</option>
                <option value="Oyo">Oyo</option>
                <option value="Plateau">Plateau</option>
                <option value="Rivers">Rivers</option>
                <option value="Sokoto">Sokoto</option>
                <option value="Taraba">Taraba</option>
                <option value="Yobe">Yobe</option>
                <option value="Zamfara">Zamfara</option>
                <option value="Federal Capital Territory">Federal Capital Territory (FCT)</option>
              </select>
              </div>

              <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
              </div>
              <div class="mb-4">
                  <div class="form-check">
                      <label class="form-check-label text-muted">
                          <input type="checkbox" class="form-check-input" name="terms">
                          I agree to all Terms & Conditions
                      </label>
                  </div>
              </div>
              <div class="mt-3">
                  <!-- Trigger the AJAX registration function -->
                  <button type="button" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" onclick="registerUser()">SIGN UP</button>
              </div>
              <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.html" class="text-primary">Login</a>
              </div>
          </form>

          <!-- AJAX Script -->
          <script>
              function registerUser() {
                  var formData = $('#registrationForm').serialize();

                  $.ajax({
                      type: 'POST',
                      url: './scripts/register.php', // Replace with your PHP file handling registration
                      data: formData,
                      dataType: 'json',
                      success: function(response) {
                          // Handle the response from the server
                          console.log(response)
                          var alertContainer = $('#alertContainer');
                          if (response.status === 'success') {
                              alertContainer.html('<div class="alert alert-success" role="alert">' + response.msg + '</div>');

                              setTimeout(function () {
                                    window.location.href = './login.php';
                                }, 3000);
                          } else {
                              alertContainer.html('<div class="alert alert-danger" role="alert">' + response.msg + '</div>');
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
