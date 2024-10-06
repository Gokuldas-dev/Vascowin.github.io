<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vasco Accounting</title>
    <!-- Bootstrap 5.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to external custom CSS -->
    <link href="dist/css/vs_mainst.css" rel="stylesheet">
</head>
<body>

<!-- Navbar (Center-Aligned Brand) -->
<nav class="navbar navbar-light fixed-top custom-navbar">
  <div class="container-fluid justify-content-center">
    <a class="navbar-brand" href="#">Vasco Accounting</a>
  </div>
</nav>

<!-- Bottom Space Section -->
<div class="container text-center" style="margin-bottom: 100px;"><br>
  <p>Start streamlining your accounting today with Vasco Accounting.</p>
</div>

<!-- Modern Footer
<footer class="custom-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-left">
        <h4 class="footer-brand">Vasco Accounting</h4>
      </div>
     
    </div>
    <div class="row">
      <div class="col-12 text-left mt-4">
        <p>&copy; 2024 Vasco Accounting. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>-->

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Navbar Scroll Effect -->
<script>
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>

<!-- Custom Script to dismiss after 5 seconds -->
<script>
  // Automatically dismiss the alert after 5 seconds (5000 ms)
  setTimeout(function() {
    let alert = document.querySelector('.alert');
    if (alert) {
      let alertInstance = new bootstrap.Alert(alert);
      alertInstance.close();
    }
  }, 5000);
</script>

</body>
</html>
