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

<!-- Hero Section -->
<section class="hero">
  <div class="container text-center text-white hero-content">
    <h2 class="hero-title">Simplify Your Accounting</h2>
    <p class="hero-subtitle">Vasco Accounting provides modern, streamlined accounting solutions for businesses of all sizes.</p>
    <a href="comp_create.php" class="btn btn-light hero-btn">Get Started</a>
  </div>
</section>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<!-- Bottom Space Section -->
<div class="container text-center" style="margin-bottom: 100px;"><br>
  <p>Start streamlining your accounting today with Vasco Accounting.</p>
</div>


<!-- Footer -->
<footer class="custom-footer">
  <div class="container">
    <h4 class="footer-brand">Vasco Accounting</h4>
   
    <p>&copy; 2024 Vasco Accounting. All rights reserved.</p>
  </div>
</footer>


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
  }, 1000);
</script>

</body>
</html>
