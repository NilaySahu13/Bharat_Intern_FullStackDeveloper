<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ME CMT</title>
</head>
<body>

<section class="vh-100 gradient-custom">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <form action="newUser.php" method="post">
            <div class="mb-md-3 mt-md-4 pb-1">

              <h2 class="fw-bold mb-2 text-uppercase">Sign up</h2>
              <!-- <p class="text-white-50 mb-5">Please enter your login and password!</p> -->

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeUserX" name="typeUserX" class="form-control form-control-lg" />
                <label class="form-label" for="typeUserX">Create Username</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeEmailX" name="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email Address</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Create Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Create account</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>