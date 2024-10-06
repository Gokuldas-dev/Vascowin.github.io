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

<!-- Navbar -->
<nav class="navbar navbar-light fixed-top custom-navbar">
  <div class="container-fluid justify-content-center">
    <a class="navbar-brand" href="#">Vasco Accounting</a>
  </div>
</nav>



<!-- Main Content -->
<main class="container main">
  <h2>Lets create a company</h2>
  <p>We offer a wide range of accounting services to help you grow your business and manage your finances more efficiently.</p>
 
  <div class="mb-4">
    <label for="companynameInput" class="form-label">Company name</label>
    <input type="text" class="form-control form-control-lg" id="emailInput" placeholder="company name">
  </div> 
  <div class="mb-4">
    <label for="companynameInput" class="form-label">Company name</label>
    <input type="text" class="form-control form-control-lg" id="emailInput" placeholder="name@example.com">
  </div>
  <div class="mb-4">
    <label for="messageTextarea" class="form-label">Address</label>
    <textarea class="form-control form-control-lg" id="messageTextarea" rows="2" placeholder="Write your message here..."></textarea>
  </div>
</main>

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

</body>
</html>
